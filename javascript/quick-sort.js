function quickSort(arr) {
	if (arr.length <= 1) {
		return arr // Сложность O(1) - возвращение результата для массива из одного элемента
	}

	let pivot = arr[Math.floor(arr.length / 2)] // Сложность O(1) - выбор опорного элемента
	let left = [] // Сложность O(1) - инициализация массива
	let right = [] // Сложность O(1) - инициализация массива

	for (let i = 0; i < arr.length; i++) { // Сложность O(n) - обход массива
		if (arr[i] < pivot) {
			left.push(arr[i]) // Сложность O(1) - вставка в массив
		} else if (arr[i] > pivot) {
			right.push(arr[i]) // Сложность O(1) - вставка в массив
		}
		// Мы игнорируем случай arr[i] == pivot для простоты
	}

	// Рекурсивный вызов и конкатенация массивов
	// Сложность в среднем O(n log n), в худшем O(n^2) из-за рекурсии
	return quickSort(left).concat(pivot, quickSort(right))
}

// Пример использования:
let sortedArray = quickSort([3, 0, 2, 5, -1, 4, 1])
console.log(sortedArray) // [-1, 0, 1, 2, 3, 4, 5]
