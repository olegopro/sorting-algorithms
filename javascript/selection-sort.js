function selectionSort(arr) {
	let n = arr.length

	// O(n^2) - два вложенных цикла
	for (let i = 0; i < n; i++) {
		// Находим минимальный элемент в неотсортированной части
		let min = i // Сложность O(1) - присваивание значения
		for (let j = i + 1; j < n; j++) { // Внутренний цикл - O(n)
			if (arr[j] < arr[min]) {
				min = j
			}
		}
		// Меняем местами найденный минимальный элемент с первым элементом
		if (min != i) {
			// Сложность O(1) - обмен значениями
			let tmp = arr[i]
			arr[i] = arr[min]
			arr[min] = tmp
		}
	}
	
	return arr
}

let inputArray = [5, 2, 9, 1, 5, 6]
selectionSort(inputArray)
console.log(inputArray) // Выведет отсортированный массив
