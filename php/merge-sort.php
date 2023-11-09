<?php

function mergeSort($arr)
{
	if (count($arr) == 1) return $arr; // Сложность O(1) - возвращение массива

	$mid = count($arr) / 2; // Сложность O(1) - нахождение середины массива
	$left = array_slice($arr, 0, $mid); // Сложность O(k), где k = n/2 -> O(n)
	$right = array_slice($arr, $mid); // Сложность O(k), где k = n/2 -> O(n)

	// Рекурсия  mergeSort()
	$left = mergeSort($left); // Сложность O(n log n) - рекурсивная сортировка
	$right = mergeSort($right); // Сложность O(n log n) - рекурсивная сортировка

	return merge($left, $right); // Сложность O(n) - слияние
}

function merge($left, $right)
{
	$result = array();
	$leftIndex = 0;
	$rightIndex = 0;

	while ($leftIndex < count($left) && $rightIndex < count($right)) {
		if ($left[$leftIndex] < $right[$rightIndex]) {
			$result[] = $left[$leftIndex]; // Сложность O(1) - добавление элемента в массив
			$leftIndex++; // Сложность O(1) - инкрементация
		} else {
			$result[] = $right[$rightIndex]; // Сложность O(1) - добавление элемента в массив
			$rightIndex++; // Сложность O(1) - инкрементация
		}
	}

	// Объединяем оставшиеся элементы
	while ($leftIndex < count($left)) {
		$result[] = $left[$leftIndex]; // Сложность O(1) - добавление элемента в массив
		$leftIndex++; // Сложность O(1) - инкрементация
	}

	while ($rightIndex < count($right)) {
		$result[] = $right[$rightIndex]; // Сложность O(1) - добавление элемента в массив
		$rightIndex++; // Сложность O(1) - инкрементация
	}

	return $result; // Сложность O(1) - возвращение массива
}

// Пример использования
$arr = array(4, 2, 5, 1, 3);
print_r(mergeSort($arr));
