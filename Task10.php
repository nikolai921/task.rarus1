<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

//Реализуйте функцию isContinuousSequence, которая проверяет,
// является ли переданная последовательность целых чисел - возрастающей непрерывно (не имеющей пропусков чисел).

$data = [9, 8, 12, 13];

function isContinuousSequence($array)
{
    $length = count($array) - 1;
    $flag = 'true';

    for($i = 1;$i <= $length && $flag == 'true'; $i++)
    {
        if(($array[$i] > $array[$i - 1]))
        {
            $flag = 'true';
        } else
        {
            $flag = 'false';
        }
    }

    return $flag;
}

echo isContinuousSequence($data);