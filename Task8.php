<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 4:13
 * Реализуйте функцию swap, которая меняет местами два элемента относительно переданного индекса.
 *  Например, если передан индекс 5, то функция меняет местами элементы, находящиеся по индексам 4 и 6.
 */

$names = ['john', 'smith', 'karl'];

function swap($names, $number)
{
    if (!empty($names[$number - 1]) && !empty($names[$number + 1])) {
        $result = $names;
        $result[$number + 1] = $names[$number - 1];
        $result[$number - 1] = $names[$number + 1];
    } else {
        $result = $names;
    }

    return $result;
}

print_r(swap($names, 4));