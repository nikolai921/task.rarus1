<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 4:13
 * Реализуйте функцию findIndex, которая возвращает первый встретившийся индекс переданного элемента в случае,
 * если элемент присутствует в массиве, и -1 в случае, если он отсутствует.
 */

$temperatures = [37.5, 34, 39.3, 40, 38.7, 34, 40];

function findIndex($array, $number)
{
    $key = array_search($number, $array);
    return $key;
}

echo findIndex($temperatures, 34);