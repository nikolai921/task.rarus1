<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 15:50
 * Реализуйте функцию average, которая возвращает среднее арифметическое всех переданных аргументов.
 * Если функции не передать ни одного аргумента, то она должна вернуть null.
 */


function average(...$array)
{
    if (empty($array)) {
        $result = null;
    } else {
        $result = array_sum($array) / count($array);
    }
    return $result;
}

