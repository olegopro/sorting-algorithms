<?php

function bubbleSort(array &$arr) {
    $n = count($arr); // Сложность O(1) - получение размера массива

    do {
        $swapped = false; // Сложность O(1) - присваивание значения
        for ($i = 0; $i < $n - 1; $i++) { // Сложность O(n) - в худшем случае выполняется n-1 итераций
            if ($arr[$i] > $arr[$i + 1]) {
                // Обмен элементов
                $temp = $arr[$i]; // Сложность O(1) - присваивание значения
                $arr[$i] = $arr[$i + 1]; // Сложность O(1) - присваивание значения
                $arr[$i + 1] = $temp; // Сложность O(1) - присваивание значения
                $swapped = true; // Сложность O(1) - присваивание значения
            }
        }
        // Уменьшаем n, так как последний элемент уже на своем месте
        $n--; // Сложность O(1) - декремент переменной
    } while ($swapped); // Сложность O(n) - цикл do...while может выполниться максимум n раз

    // Нет необходимости возвращать массив, так как он передан по ссылке
}

// Пример использования
$arrayToSort = [64, 34, 25, 12, 22, 11, 90];
bubbleSort($arrayToSort); // Вызов функции сортировки - общая сложность O(n^2)
print_r($arrayToSort); // Сложность O(1) - вывод массива