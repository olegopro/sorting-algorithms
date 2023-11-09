function mergeSort(arr) {
	if (arr.length <= 1) {
		return arr // Сложность O(1) - возвращение массива
	}

	const middle = Math.floor(arr.length / 2) // Сложность O(1) - вычисление середины массива
	const left = arr.slice(0, middle) // Сложность O(k), где k = n/2 -> O(n)
	const right = arr.slice(middle) // Сложность O(k), где k = n/2 -> O(n)

	// Рекурсия mergeSort()
	return merge(mergeSort(left), mergeSort(right)) // Сложность O(n log n) - рекурсивное слияние
}

function merge(left, right) {
	let result = []
	let indexLeft = 0
	let indexRight = 0

	while (indexLeft < left.length && indexRight < right.length) {
		if (left[indexLeft] < right[indexRight]) {
			result.push(left[indexLeft]) // Сложность O(1) - добавление элемента в массив
			indexLeft++ // Сложность O(1) - инкрементация
		} else {
			result.push(right[indexRight]) // Сложность O(1) - добавление элемента в массив
			indexRight++ // Сложность O(1) - инкрементация
		}
	}

	// Объединяем оставшиеся элементы
	// В одном из массивов уже не осталось элементов, поэтому добавим оставшиеся элементы из другого массива
	return result.concat(left.slice(indexLeft)).concat(right.slice(indexRight)) // Сложность O(n)
}

// Пример использования
const array = [4, 2, 5, 1, 3]
console.log(mergeSort(array))
