<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 4:13
 * Реализуйте функцию getIndexOfWarmestDay, которая находит самый тёплый день
 * (тот, в котором была зарегистрирована максимальная температура) и возвращает индекс этого дня в исходном массиве.
 */


$data = [
    [-5, 7, 1],
    [3, 2, 3],
    [-1, -1, 10]
];

function getIndexOfWarmestDay($array)
{
    $keyMax = 0;
    $sumMax = array_sum($array[0]);


    foreach($array as $key => $elem)
    {
        $sumElem = array_sum($elem);

        if($sumElem > $sumMax)
        {
            $keyMax = $key;
            $sumMax = $sumElem;
        }
    }

    return $keyMax;
}

echo getIndexOfWarmestDay($data);
