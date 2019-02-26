<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 4:13
 * Реализуйте функцию get, которая излекает из массива элемент по указанному индексу,
 * если индекс существует, либо возвращает значение по умолчанию.
 */

$cities = ['moscow', 'london', 'berlin', 'porto'];


function get($array, int $index, $static = null)
{
    if (empty($array[$index])) {
        $city = $static;
    } else {
        $city = $array[$index];
    }
    return $city;
}

echo get($cities, 5, 'praga');