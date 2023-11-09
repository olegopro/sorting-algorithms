function heapSort(array) {
	buildMaxHeap(array) // Сложность O(n), где n - размер массива

	for (let i = array.length - 1; i > 0; i--) {
		swap(array, 0, i) // Сложность O(1) - обмен элементов
		maxHeapify(array, 0, i) // Сложность O(log n) - восстановление свойств кучи
	}
	// Общая сложность: O(n log n)
	return array
}

// Построение максимальной кучи
function buildMaxHeap(array) {
	const startIdx = Math.floor(array.length / 2) - 1
	for (let i = startIdx; i >= 0; i--) {
		maxHeapify(array, i, array.length) // Сложность O(log n) на каждом вызове
	}
	// Здесь используется свойство, что сложность не превышает O(n)
}

// Восстановление свойства максимальной кучи
function maxHeapify(array, idx, heapSize) {
	let largest = idx
	const left = 2 * idx + 1
	const right = 2 * idx + 2

	if (left < heapSize && array[left] > array[largest]) {
		largest = left
	}

	if (right < heapSize && array[right] > array[largest]) {
		largest = right
	}

	if (largest !== idx) {
		swap(array, idx, largest)
		maxHeapify(array, largest, heapSize) // Рекурсивный вызов, сложность O(log n)
	}
	// Сложность операций сравнения и присваивания - O(1)
}

// Обмен элементов в массиве
function swap(array, idx1, idx2) {
	const temp = array[idx1] // Сложность O(1)
	array[idx1] = array[idx2]
	array[idx2] = temp
	// Всего три операции присваивания, сложность O(1)
}
