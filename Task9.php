<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 4:13
 * Реализуйте функцию calculateAverage, которая высчитывает среднее арифметическое элементов массива.
 */

$temperatures = [37.5, 34, 39.3, 40, 38.7, 41.5];

function calculateAverage($array)
{
    if(empty($array))
    {
        $result = null;
    } else {
        $result = array_sum($array)/count($array);
        return $result;
    }

}

echo 'Avr' . ' ' . calculateAverage($temperatures);


