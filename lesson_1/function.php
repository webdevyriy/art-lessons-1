<?php

/*
 * Написать функцию которая по параметрам принимает число из десятичной системы счисления и преобразовывает в двоичную.
 * */

function custom_decbin($n){
    $result = '';

    while ($n > 0) {
        $result = $n % 2 . $result;
        $n = (int)($n / 2);
    }
    return $result;
}

/*
 * Написать функцию, которая выполняет преобразование наоборот.
 *
 * из двоичной системы счисления и преобразовывает в десятичную
 *
 * */
function custom_bindec($n)
{
    $nlen = strlen($n);

    for ($i = 0; $i < $nlen; $i++) {
        $currentIteration += ((int)$n[$nlen - $i - 1]) * 2 ** $i;
    }

    return $currentIteration;
}


/* Найти сумму всех первых N чисел фибоначи */

function sum_fibonacci($n)
{
    $fib = [0, 1];

    for ($i = 2; $i <= $n; $i++) {
        $prevNum1 = $fib[$i - 1];
        $prevNum2 = $fib[$i - 2];
        $fib[] = $prevNum1 + $prevNum2;
    }

    return $fib[$n];
}

/* рекурсивно*/

function sum_fibonacci_recursively($n)
{
    if ($n < 2) {
        return $n;
    }

    return sum_fibonacci_recursively($n - 1) + sum_fibonacci_recursively($n - 2);
}


/*Написать функцию, возведения числа N в степень M*/

function custom_pow($number, $exponentiation)
{
    $result = $number;
    for ($i = 0; $i < $exponentiation - 1; $i++) {
        $result = $result * $number;
    }

    return $result;
}

/* рекурсивно*/

function custom_pow_recursively($number, $exponentiation)
{
    if ($exponentiation !== 0) {
        return $number * custom_pow_recursively($number, $exponentiation - 1);
    }

    return 1;
}


/*
 Написать функцию которая вычисляет входит ли IP-адрес в диапазон указанных IP-адресов. Вычислить для версии ipv4.
 * */

function calculating_ip($start_ip, $end_ip, $target_ip)
{
    $start_ip = str_replace(".", "", $start_ip);
    $end_ip = str_replace(".", "", $end_ip);
    $target_ip = str_replace(".", "", $target_ip);

    $start_ip = (int)$start_ip;
    $end_ip = (int)$end_ip;
    $target_ip = (int)$target_ip;

    if ($start_ip != 0 && $end_ip != 0 && $target_ip != 0) {
        if ($start_ip <= $target_ip && $target_ip <= $end_ip) {
            echo('true');
        } else {
            echo("false");
        }
    }
}

/* Подсчитать процентное соотношение
    Положительных/отрицательных/нулевых/простых чисел
 */


function isPrime($num)
{
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return $num > 1;
}

function calculate_percentage_array($arr)
{
    $plus = 0;
    $minus = 0;
    $zero = 0;
    $normal = 0;
    $result = '';
    $all_element = count($arr);

    for ($i = 0; $i < $all_element; $i++) {

        if ($arr[$i] > 0) {
            $plus++;
        }

        if ($arr[$i] < 0) {
            $minus++;
        }
        if ($arr[$i] == 0) {
            $zero++;
        }
        if (isPrime($arr[$i])) {
            $normal++;
        }

    }


    $result = 'Положительных = ' . 100 * $plus / $all_element . '%</br>' .
        'Отрицательных = ' . 100 * $minus / $all_element . '%</br>' .
        'Нулевых = ' . 100 * $zero / $all_element . '%</br>' .
        'Простых чисел = ' . 100 * $normal / $all_element . '%</br>';

    return $result;

}

/*
 * Отсортировать элементы по возрастанию
 * */

function sort_array_ascending($arr)
{

    $result = $arr;

    for ($i = 0; $i < count($result); $i++) {
        for ($j = 0; $j < count($result) - 1 - $i; $j++) {
            if ($result[$j] > $result[$j + 1]) {
                $two = $result[$j];
                $result[$j] = $result[$j + 1];
                $result[$j + 1] = $two;
            }
        }
    }

    return print_r($result);
}

/*

 * Рекурсивно
 * */


function sort_array_ascending_recursively($arr)
{
    $count = count($arr);
    if ($count <= 1) return $arr;

    $baseValue = $arr[0];
    $leftArr = $rightArr = array();

    for ($i = 1; $i < $count; $i++) {
        if ($baseValue > $arr[$i]) {

            $leftArr[] = $arr[$i];
        } else {

            $rightArr[] = $arr[$i];
        }
    }

    $leftArr = sort_array_ascending_recursively($leftArr);
    $rightArr = sort_array_ascending_recursively($rightArr);

    return array_merge($leftArr, array($baseValue), $rightArr);
}


/* Отсортировать элементы по убыванию*/

function sort_array_descending($arr)
{
    $result = $arr;

    for ($i = 0; $i < count($result); $i++) {
        for ($j = 0; $j < count($result) - 1 - $i; $j++) {
            if ($result[$j] < $result[$j + 1]) {
                $two = $result[$j];
                $result[$j] = $result[$j + 1];
                $result[$j + 1] = $two;
            }
        }
    }

    return print_r($result);
}


/*

 * Рекурсивно
 * */

function sort_array_descending_recursively($arr)
{
    $count = count($arr);
    if ($count <= 1) return $arr;

    $baseValue = $arr[0];
    $leftArr = $rightArr = array();

    for ($i = 1; $i < $count; $i++) {
        if ($baseValue > $arr[$i]) {

            $leftArr[] = $arr[$i];
        } else {

            $rightArr[] = $arr[$i];
        }
    }

    $leftArr = sort_array_ascending_recursively($leftArr);
    $rightArr = sort_array_ascending_recursively($rightArr);

    return array_merge_recursive($leftArr, array($baseValue), $rightArr);
}





/* Для двумерных массивов Транспонировать матрицу */

function transpose_matrix($arr)
{

    $result = [];

    foreach ($arr[0] as $key => $value) {
        $result[] = [$value, $arr[1][$key]];
    }

    return $result;
}


function sum_matrix($matrix_1, $matrix_2){
    $m = count($matrix_1);
    $n = count($matrix_1[0]);
    $result = [];
    for ($i = 0; $i < $m; $i++) {
        $result[$i] = [];
        for ($j = 0; $j < $n; $j++) {
            $result[$i][$j] = $matrix_1[$i][$j] + $matrix_2[$i][$j];
        }

    }
    return $result;
}

/*
Удалить строки, в которых сумма элементов положительна и присутствует хотя бы один нулевой элемент Аналогично для столбцов
   */

function positive_matrix($arr)
{
    $sumRow = [];
    $sumColumn = [];

    $rowHasZero = [];
    $columnHasZero = [];

    for ($i = 0, $iMax = count($arr); $i < $iMax; $i++) {
        for ($j = 0, $jMax = count($arr[$i]); $j < $jMax; $j++) {
            if (!array_key_exists($i, $sumRow)) {
                $sumRow[$i] = 0;
            }
            if (!array_key_exists($j, $sumColumn)) {
                $sumColumn[$j] = 0;
            }
            if (!array_key_exists($i, $rowHasZero)) {
                $rowHasZero[$i] = false;
            }
            if (!array_key_exists($j, $columnHasZero)) {
                $columnHasZero[$j] = false;
            }

            $sumRow[$i] += $arr[$i][$j];
            $sumColumn[$j] += $arr[$i][$j];

            $rowHasZero[$i] = $rowHasZero[$i] || $arr[$i][$j] === 0;
            $columnHasZero[$j] = $columnHasZero[$j] || $arr[$i][$j] === 0;
        }
    }
    $result = [];
    for ($i = 0; $i < $iMax; $i++) {
        if ($rowHasZero[$i]) {
            continue;
        }
        for ($j = 0; $j < $jMax; $j++) {
            if ($columnHasZero[$j]) {
                continue;
            }
            $result[$i][$j] = $arr[$i][$j];
            if ($j === $jMax - 1) {
                $result[$i] = array_values($result[$i]);
            }
        }
    }
    return array_values($result);
}


/*
 Написать рекурсивную функцию которая будет обходить и выводить все значения любого массива и любого уровня вложенности
*/


function get_value_array_complexity($arr)
{

    foreach ($arr as $val) {
        if (is_array($val)) {
            get_value_array_complexity($val);
        }

        if (is_int($val)) {
            echo $val . ' ';
        }
    }

}
