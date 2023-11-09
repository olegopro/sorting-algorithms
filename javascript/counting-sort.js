function countingSort(arr, min, max) {
	const count = new Array(max - min + 1).fill(0) // Сложность O(k), где k — диапазон значений

	// Подсчет элементов
	arr.forEach(element => {
		count[element - min]++ // Сложность O(1) для каждого элемента, общая сложность O(n)
	})

	let sortedIndex = 0
	// Сортировка элементов
	count.forEach((elem, i) => {
		while (elem > 0) {
			arr[sortedIndex++] = i + min // Сложность O(1) для каждого элемента, общая сложность O(n)
			elem--
		}
	})

	return arr // Сложность O(1) - возврат отсортированного массива
}

// Пример использования
let array = [4, 2, 2, 8, 3, 3, 1]
console.log(countingSort(array, 1, 8)) // Печатает отсортированный массив
