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


$data = [];

function getIndexOfWarmestDay($array)
{
    if (empty($array)) {
        $keyMax = null;
    } else {

        $keyMax = 0;
        $tempMax = max($array[0]);


        foreach ($array as $key => $elem) {
            $maxElem = max($elem);

            if ($maxElem > $tempMax) {
                $keyMax = $key;
                $tempMax = $maxElem;
            }
        }
    }
    return $keyMax;
}

echo getIndexOfWarmestDay($data);
