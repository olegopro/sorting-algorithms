<?php

function countingSort(array $arr, int $min, int $max): array
{
	$count = array_fill(0, $max - $min + 1, 0); // Сложность O(k), где k — диапазон значений

	// Подсчет элементов
	foreach ($arr as $number) {
		$count[$number - $min]++; // Сложность O(1) для каждого элемента, общая сложность O(n)
	}

	$z = 0;
	// Сортировка элементов
	foreach ($count as $i => $val) {
		while ($val > 0) {
			$arr[$z++] = $i + $min; // Сложность O(1) для каждого элемента, общая сложность O(n)
			$val--;
		}
	}

	return $arr; // Сложность O(1) - возврат отсортированного массива
}

// Пример использования
$array = [4, 2, 2, 8, 3, 3, 1];
print_r(countingSort($array, 1, 8)); // Печатает отсортированный массив
