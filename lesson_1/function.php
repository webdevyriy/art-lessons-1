<?php

/*
 * Написать функцию которая по параметрам принимает число из десятичной системы счисления и преобразовывает в двоичную.
 * */

function custom_decbin($number)
{
    $result = '';

    while ($number > 0) {
        $result = $number % 2 . $result;
        $number = (int)($number / 2);
    }
    return $result;
}

/*
 * Написать функцию, которая выполняет преобразование наоборот.
 *
 * из двоичной системы счисления и преобразовывает в десятичную
 *
 * */
function custom_bindec($number)
{
    $number_len = strlen($number);
    $result = '';

    for ($i = 0; $i < $number_len; $i++) {
        $result += ((int)$number[$number_len - $i - 1]) * 2 ** $i;
    }

    return $result;
}


/* Найти сумму всех первых N чисел фибоначи */

function sum_fibonacci($number)
{
    $result = [0, 1];

    for ($i = 2; $i <= $number; $i++) {
        $prev_num_one = $result[$i - 1];
        $prev_num_two = $result[$i - 2];
        $result[] = $prev_num_one + $prev_num_two;
    }

    return $result[$number];
}

/* рекурсивно*/

function sum_fibonacci_recursively($number)
{
    if ($number < 2) {
        return $number;
    }

    return sum_fibonacci_recursively($number - 1) + sum_fibonacci_recursively($number - 2);
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


function is_prime($number)
{
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return $number > 1;
}

function calculate_percentage_array($arr)
{
    $plus = 0;
    $minus = 0;
    $zero = 0;
    $normal = 0;
    $result = [];
    $all_element = count($arr);
    if (is_array($arr)) {
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
            if (is_prime($arr[$i])) {
                $normal++;
            }

        }
    }

    $result_object = [
        'процент положительных чисел' => 100 * $plus / $all_element,
        'процент отрицательных чисел' => 100 * $minus / $all_element,
        'процент нулевых чисел' => 100 * $zero / $all_element,
        'процент простых чисел' => 100 * $normal / $all_element,
    ];


    return $result_object;

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

    return $result;
}

/*

 * Рекурсивно
 * */


function sort_array_ascending_recursively($arr)
{
    $count = count($arr);

    if ($count <= 1) {
        return $arr;
    }

    $base_value = $arr[0];
    $left_arr = $right_arr = array();

    for ($i = 1; $i < $count; $i++) {
        if ($base_value > $arr[$i]) {

            $left_arr[] = $arr[$i];
        } else {

            $right_arr[] = $arr[$i];
        }
    }

    $left_arr = sort_array_ascending_recursively($left_arr);
    $right_arr = sort_array_ascending_recursively($right_arr);

    return array_merge($left_arr, array($base_value), $right_arr);
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

    return $result;
}


/*

 * Рекурсивно
 * */

function sort_array_descending_recursively($arr)
{
    $count = count($arr);
    if ($count <= 1){
        return $arr;
    }


    $base_value = $arr[0];
    $left_arr = $right_arr = array();

    for ($i = 1; $i < $count; $i++) {
        if ($base_value > $arr[$i]) {

            $left_arr[] = $arr[$i];
        } else {
            $right_arr[] = $arr[$i];
        }
    }

    $left_arr = sort_array_ascending_recursively($left_arr);
    $right_arr = sort_array_ascending_recursively($right_arr);

    return array_merge_recursive($left_arr, array($base_value), $right_arr);
}


/* Для двумерных массивов Транспонировать матрицу */

function transpose_matrix($arr)
{
    if (!is_array($arr)) {
        return false;
    }

    $result = [];

    foreach ($arr as $key => $value) {
        if (!is_array($value)) {
            return $arr;
        }
        foreach ($value as $key2 => $value2) {
            $result[$key2][$key] = $value2;
        }
    }
    return $result;

}


function sum_matrix($matrix_one, $matrix_two)
{
    $m = count($matrix_one);
    $n = count($matrix_one[0]);
    $result = [];
    for ($i = 0; $i < $m; $i++) {
        $result[$i] = [];
        for ($j = 0; $j < $n; $j++) {
            $result[$i][$j] = $matrix_one[$i][$j] + $matrix_two[$i][$j];
        }

    }
    return $result;
}

/*
Удалить строки, в которых сумма элементов положительна и присутствует хотя бы один нулевой элемент Аналогично для столбцов
   */

function positive_matrix($arr)
{
    $sum_row = [];
    $sum_column = [];

    $row_has_zero = [];
    $column_has_zero = [];

    for ($i = 0, $i_max = count($arr); $i < $i_max; $i++) {
        for ($j = 0, $j_max = count($arr[$i]); $j < $j_max; $j++) {
            if (!array_key_exists($i, $sum_row)) {
                $sum_row[$i] = 0;
            }
            if (!array_key_exists($j, $sum_column)) {
                $sum_column[$j] = 0;
            }
            if (!array_key_exists($i, $row_has_zero)) {
                $row_has_zero[$i] = false;
            }
            if (!array_key_exists($j, $column_has_zero)) {
                $column_has_zero[$j] = false;
            }

            $sum_row[$i] += $arr[$i][$j];
            $sum_column[$j] += $arr[$i][$j];

            $row_has_zero[$i] = $row_has_zero[$i] || $arr[$i][$j] === 0;
            $column_has_zero[$j] = $column_has_zero[$j] || $arr[$i][$j] === 0;
        }
    }
    $result = [];
    for ($i = 0; $i < $i_max; $i++) {
        if ($row_has_zero[$i]) {
            continue;
        }
        for ($j = 0; $j < $j_max; $j++) {
            if ($column_has_zero[$j]) {
                continue;
            }
            $result[$i][$j] = $arr[$i][$j];
            if ($j === $j_max - 1) {
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
