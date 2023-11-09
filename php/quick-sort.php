<?php

function quickSort(array $arr): array
{
	if (count($arr) <= 1) {
		return $arr; // Сложность O(1) - возвращение результата для массива из одного элемента
	}

	$pivot = $arr[floor(count($arr) / 2)]; // Сложность O(1) - выбор опорного элемента
	$left = $right = array(); // Сложность O(1) - инициализация массивов

	foreach ($arr as $value) { // Сложность O(n) - обход массива
		if ($value < $pivot) {
			$left[] = $value; // Сложность O(1) - вставка в массив
		} elseif ($value > $pivot) {
			$right[] = $value; // Сложность O(1) - вставка в массив
		}
		// Мы игнорируем случай $value == $pivot для простоты
	}

	// Рекурсивный вызов и слияние массивов
	// Сложность в среднем O(n log n), в худшем O(n^2) из-за рекурсии
	return array_merge(quickSort($left), array($pivot), quickSort($right));
}

// Пример использования:
$sortedArray = quickSort([3, 0, 2, 5, -1, 4, 1]);
print_r($sortedArray); // Array ( [0] => -1 [1] => 0 [2] => 1 [3] => 2 [4] => 3 [5] => 4 [6] => 5 )
