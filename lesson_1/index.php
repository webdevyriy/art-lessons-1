<?php require_once './function.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 1 (Базовые основы языка):</title>
    <link rel="stylesheet" href="css/mustard-ui.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        pre {
            white-space: pre-wrap;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Задание 1 (Базовые основы языка):</h1>
    <section>
        <p><b>Task 1.</b></p>
        <p>ФУНКЦИИ ДЛЯ РАБОТЫ С МАССИВАМИ</p>
        <p>Написать функцию которая по параметрам принимает число из десятичной системы счисления и преобразовывает в двоичную. Написать функцию которая выполняет преобразование
            наоборот.</p>
        <?php
        echo '<pre>';
        echo custom_decbin(15);
        echo '</pre>';
        ?>

        <?php
        echo '<pre>';
        echo custom_bindec('1111');
        echo '</pre>';
        ?>
    </section>
    <section>
        <p><b>Task 2.</b></p>
        <p>Найти сумму всех первых N чисел фибоначи</p>
        <?php
        echo '<pre>';
        print_r(sum_fibonacci(7));
        echo '</pre>';
        echo 'рекурсивно <br>';
        echo '<pre>';
        echo sum_fibonacci_recursively(7);
        echo '</pre>';
        ?>
    </section>
    <section>
        <p><b>Task 3.</b></p>
        <p>Написать функцию, возведения числа N в степень M</p>
        <?php
        echo '<pre>';
        echo custom_pow(2, 4);
        echo '</pre>';
        echo 'рекурсивно <br>';
        echo '<pre>';
        echo custom_pow_recursively(2, 4);
        echo '</pre>';
        ?>
    </section>
    <section>
        <p><b>Task 4.</b></p>
        <p>Написать функцию которая вычисляет входит ли IP-адрес в диапазон указанных IP-адресов. Вычислить для версии ipv4. </p>
        <?php
        echo '<pre>';
                echo calculating_ip('38.229.189.111',  '39.229.189.111', '36.229.189.111');
        echo '</pre>';
        ?>
    </section>

    <section>
        <p><b>Task 5.</b></p>
        <h1>Для одномерного массива:</h1>
        <p>Подсчитать процентное соотношение</p>
        <ul>
            <li>Положительных/отрицательных/нулевых/простых чисел</li>
            <li>Отсортировать элементы по возрастанию/убыванию</li>
        </ul>
        <?php
        $arr5 = [2, 5, 3, -59, 2.75];
        echo 'подсчитать процентное соотношение';
        echo '<pre>';
        echo print_r(calculate_percentage_array($arr5));
        echo '</pre>';
        ?>
        <?php
        echo 'Отсортировать элементы по возрастанию';
        echo '<pre>';
        print_r(sort_array_ascending($arr5));
        echo '</pre>';
        echo 'Рекурсивно';
        echo '<pre>';
        print_r(sort_array_ascending_recursively($arr5));
        echo '</pre>';
        ?>
        <?php
        echo 'Отсортировать элементы по убыванию';
        echo '<pre>';
        print_r(sort_array_descending($arr5));
        echo '</pre>';
        echo 'Рекурсивно';
        echo '<pre>';
        print_r(sort_array_descending_recursively($arr5));
        echo '</pre>';
        ?>
    </section>

    <section>
        <p><b>Task 6.</b></p>
        <p>Для двумерных массивов</p>
        <p>Транспонировать матрицу</p>
        <?php
        $arr6 = [
            [16, 89, 10, -59, 5],
            [19, 59, 10, -9, 95],
        ];


        $arr1 = [
            [1,2,3,4,5],
            [1,2,3,4,5],
            [1,2,3,4,5],
            [1,2,3,4,5],
            [1,2,3,4,5],
            [1,2,3,4,5],
            [1,2,3,4,5],
        ];

        echo '<pre>';
        print_r(transpose_matrix($arr1));
        echo '</pre>';
        ?>

        <p>Сложить две матрицы</p>

        <?php


        $a1 = [
            [1, 2, 5],
            [4, 5, 6]
        ];

        $a2 = [
            [3, 2, 6],
            [1, 1, 6]
        ];


        echo '<pre>';
        var_export(sum_matrix($a1, $a2));
        echo '</pre>';
        ?>

        <p>Удалить те строки, в которых сумма элементов положительна и присутствует хотя бы один нулевой элемент.</p>
        <?php
        $arr6_3 = [
            [16, 89, 0, -59, 5],
            [19, 59, 10, -9, 95],
            [19, 59, 10, -9, 95],
        ];
        echo '<pre>';
        print_r(positive_matrix_row($arr6_3));
        echo '</pre>';
        ?>
        <p>Удалить те столбцы, в которых сумма элементов положительна и присутствует хотя бы один нулевой элемент.</p>
        <?
        echo '<pre>';
        print_r(positive_matrix_column($arr6_3));
        echo '</pre>';
        ?>
    </section>
    <section>
        <p><b>Task 7.</b></p>
        <p>Рекурсии
            Все задачи на циклы которые можно реализовать с помощью рекурсии, переписать с помощью рекурсивных функций
            Написать рекурсивную функцию которая будет обходить и выводить все значения любого массива и любого уровня вложенности
        </p>
        <?php
        $arr7 = [
            [16, 89, 0, -59, 5],
            [19, 59, 10, -9, 95],
        ];
        echo '<pre>';
        echo 'Написать рекурсивную функцию которая будет обходить и выводить все значения любого массива и любого уровня вложенности <br>';
        echo get_value_array_complexity($arr7);
        echo '</pre>';
        ?>
    </section>


</div>
</body>
</html>
