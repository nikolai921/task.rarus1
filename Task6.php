<?php

//Реализуйте функцию get, которая излекает из массива элемент по указанному индексу,
// если индекс существует, либо возвращает значение по умолчанию.

error_reporting(E_ALL);
ini_set('display_errors', 'on');

$cities = ['moscow', 'london', 'berlin', 'porto'];


function get($array, int $index, $static=null)
{
    if(empty($array[$index]))
    {
        $city = $static;
    } else
    {
        $city = $array[$index];
    }
    return $city;
}

echo get($cities,  5, 'praga');