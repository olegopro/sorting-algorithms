function insertionSort(arr) {
	for (let i = 1; i < arr.length; i++) { // Сложность в худшем случае O(n) для внешнего цикла
		let current = arr[i] // Сложность O(1) - присваивание значения
		let j = i - 1

		while (j >= 0 && arr[j] > current) { // Сложность в худшем случае O(n) для внутреннего цикла, итого O(n)*O(n) = O(n²) для двух вложенных циклов
			arr[j + 1] = arr[j] // Сложность O(1) - присваивание значения
			j--
		}
		
		arr[j + 1] = current // Сложность O(1) - присваивание значения
	}

	return arr // Сложность O(1) - возврат значения
}

// Пример использования
const array = [5, 3, 1, 4, 6]
console.log(insertionSort(array)) // Выведет отсортированный массив