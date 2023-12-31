<?php

function shellSort(array &$arr)
{
	$n = count($arr);

	// Начальный интервал берется как половина длины массива и уменьшается каждый раз вдвое
	for ($interval = floor($n / 2); $interval > 0; $interval = floor($interval / 2)) { // Внешний цикл: O(log n)
		
		// Внутренний цикл выполняется для каждого элемента массива
		for ($i = $interval; $i < $n; $i++) { // Внутренний цикл: O(n) (в среднем)
			$temp = $arr[$i]; // Присваивание выполняется за константное время O(1)
			$j = $i;
			
			// Сдвигаем элементы, если текущий элемент меньше элемента на позиции j - interval
			while ($j >= $interval && $arr[$j - $interval] > $temp) { // В худшем случае O(n/interval)
				$arr[$j] = $arr[$j - $interval]; // Присваивание выполняется за константное время O(1)
				$j -= $interval;
			}
			
			// Вставляем элемент на правильное место
			$arr[$j] = $temp; // Присваивание выполняется за константное время O(1)
		}
	}
}

// Пример использования:
$array = [35, 33, 42, 10, 14, 19, 27, 44];
shellSort($array);
print_r($array);
