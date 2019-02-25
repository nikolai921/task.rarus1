<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

//Реализуйте функцию calculateAverage, которая высчитывает среднее арифметическое элементов массива.

$temperatures = [37.5, 34, 39.3, 40, 38.7, 41.5];

function calculateAverage($array)
{
    if(empty($array))
    {
        $result = null;
    } else {
//        $sum = 0;
//        $flag = 0;
//
//        foreach ($array as $elem)
//        {
//            if(is_numeric($elem))
//            {
//                echo 1;
//                Ssum += $elem;
//                $flag += 1;
//            }
//        }

//        $result = $sum/$flag;
//    }
        $result = array_sum($array)/count($array);
        return $result;
    }

}

echo 'Avr' . ' ' . calculateAverage($temperatures);


