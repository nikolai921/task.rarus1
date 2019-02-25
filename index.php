<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

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
