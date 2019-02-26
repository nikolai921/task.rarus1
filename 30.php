<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 15:50
 * Реализуйте функцию average, которая возвращает среднее арифметическое всех переданных аргументов.
 * Если функции не передать ни одного аргумента, то она должна вернуть null.
 */

$data = [0];

function average($data)
{
    if(empty($data))
    {
        $result = null;
    } else {
        $result = array_sum($data)/count($data);
    }
    return $result;
}

print_r(average($data));