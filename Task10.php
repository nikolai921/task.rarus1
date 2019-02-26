<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 4:13
 * Реализуйте функцию isContinuousSequence, которая проверяет,
 * является ли переданная последовательность целых чисел - возрастающей непрерывно (не имеющей пропусков чисел).
 */

$data = [9, 8, 12, 13];

function isContinuousSequence($array)
{
    $length = count($array);
    $flag = true;

    for($i = 1;$i < $length && $flag == true; $i++)
    {
        if(($array[$i] > $array[$i - 1]))
        {
            $flag = true;
        } else
        {
            $flag = false;
        }
    }

    return $flag;
}

echo isContinuousSequence($data);