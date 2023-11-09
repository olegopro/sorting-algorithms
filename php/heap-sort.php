<?php

function heapSort(array &$arr)
{
	$n = count($arr);
	buildMaxHeap($arr, $n); // Сложность O(n)

	for ($i = $n - 1; $i > 0; $i--) {
		swap($arr, 0, $i); // Сложность O(1) - обмен элементов
		maxHeapify($arr, 0, $i); // Сложность O(log n) - восстановление свойств кучи
	}
	// Общая сложность: O(n log n)
}

function buildMaxHeap(array &$arr, $heapSize)
{
	$startIdx = floor($heapSize / 2) - 1;

	for ($i = $startIdx; $i >= 0; $i--) {
		maxHeapify($arr, $i, $heapSize); // Сложность O(log n) на каждом вызове
	}
	// Здесь используется свойство, что сложность не превышает O(n)
}

function maxHeapify(array &$arr, $idx, $heapSize)
{
	$largest = $idx;
	$left = 2 * $idx + 1;
	$right = 2 * $idx + 2;

	if ($left < $heapSize && $arr[$left] > $arr[$largest]) {
		$largest = $left; // Сложность O(1) - сравнение и присваивание
	}

	if ($right < $heapSize && $arr[$right] > $arr[$largest]) {
		$largest = $right; // Сложность O(1) - сравнение и присваивание
	}

	if ($largest != $idx) {
		swap($arr, $idx, $largest);
		maxHeapify($arr, $largest, $heapSize); // Рекурсивный вызов, сложность O(log n)
	}
	// Сложность операций сравнения и присваивания - O(1)
}

function swap(array &$arr, $i, $j)
{
	$temp = $arr[$i]; // Сложность O(1) - присваивание значения
	$arr[$i] = $arr[$j];
	$arr[$j] = $temp;
	// Всего три операции присваивания, сложность O(1)
}
