<?php

function t1_1($n)
{
    $b = '';

    while ($n > 0) {
        $b = $n % 2 . $b;
        $n = (int)($n / 2);
    }
    return $b;
}

function t1_2($n)
{
    $nlen = strlen($n);

    for ($i = 0; $i < $nlen; $i++) {
        $currentIteration += ((int)$n[$nlen - $i - 1]) * 2 ** $i;
    }

    return $currentIteration;
}


/* Найти сумму всех первых N чисел фибоначи */

function t2($n)
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

function t2_reg($n)
{
    if ($n < 2) {
        return $n;
    }

    return t2_reg($n - 1) + t2_reg($n - 2);
}


/*Написать функцию, возведения числа N в степень M*/

function t3($a, $b)
{
    $res = $a;
    for ($i = 0; $i < $b - 1; $i++) {
        $res = $res * $a;
    }

    return $res;
}

/* рекурсивно*/

function t3_reg($a, $b)
{
    if ($b !== 0) {
        return $a * t3_reg($a, $b - 1);
    }

    return 1;
}


/*
 Написать функцию которая вычисляет входит ли IP-адрес в диапазон указанных IP-адресов. Вычислить для версии ipv4.
 * */

function t4($start, $end, $ip)
{

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
    return  $num > 1;
}

function t5_1($arr)
{
    $plus = 0;
    $minus = 0;
    $zero = 0;
    $normal = 0;
    $res = '';
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


    $res = 'Положительных = ' . 100 * $plus / $all_element . '%</br>' .
        'Отрицательных = ' . 100 * $minus / $all_element . '%</br>' .
        'Нулевых = ' . 100 * $zero / $all_element . '%</br>' .
        'Простых чисел = ' . 100 * $normal / $all_element . '%</br>';

    return $res;

}

/*
 * Отсортировать элементы по возрастанию
 * */
function t5_2($arr)
{

    $res = $arr;

    for ($i = 0; $i < count($res); $i++) {
        for ($j = 0; $j < count($res) - 1 - $i; $j++) {
            if ($res[$j] > $res[$j + 1]) {
                $two = $res[$j];
                $res[$j] = $res[$j + 1];
                $res[$j + 1] = $two;
            }
        }
    }

    return print_r($res);
}

/*

 * Рекурсивно
 * */


function t5_2_reg($arr)
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

    $leftArr = t5_2_reg($leftArr);
    $rightArr = t5_2_reg($rightArr);

    return array_merge($leftArr, array($baseValue), $rightArr);
}


/* Отсортировать элементы по убыванию*/

function t5_3($arr)
{
    $res = $arr;

    for ($i = 0; $i < count($res); $i++) {
        for ($j = 0; $j < count($res) - 1 - $i; $j++) {
            if ($res[$j] < $res[$j + 1]) {
                $two = $res[$j];
                $res[$j] = $res[$j + 1];
                $res[$j + 1] = $two;
            }
        }
    }

    return print_r($res);
}


/*

 * Рекурсивно
 * */

function t5_3_reg($arr)
{
    $count = count($arr);

    $baseValue = $arr[0];
    $leftArr = $rightArr = array();

    for ($i = 1; $i < $count; $i++) {
        if ($baseValue > $arr[$i]) {
            $leftArr[] = $arr[$i];
        } else {
            $rightArr[] = $arr[$i];
        }
    }

    $leftArr = t5_2_reg($leftArr);
    $rightArr = t5_2_reg($rightArr);

    return array_merge_recursive($leftArr, array($baseValue), $rightArr);
}


/* Для двумерных массивов Транспонировать матрицу */

function t6_1($arr)
{

    $res = [];

    foreach ($arr[0] as $key => $value) {
        $res[] = [$value, $arr[1][$key]];
    }

    return $res;
}


function t6_2($arr)
{

}

/*
 Написать рекурсивную функцию которая будет обходить и выводить все значения любого массива и любого уровня вложенности
*/

function t_7($arr)
{

    foreach ($arr as $val) {
        if (is_array($val)) {
            t_7($val);
        }

        if (is_int($val)) {
            echo $val . ' ';
        }
    }

}
