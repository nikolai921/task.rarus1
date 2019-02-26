<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 6:11
 */

$data = [3, 10, 4, 3];

function bubbleSort($data)
{
    $count = count($data);

    $flag = 0;

    for($i = 0, $j = 1; $j < $count; $i++, $j++)
    {
        if($data[$i] > $data[$j])
        {
            $flag = 1;
            $var = $data[$j];
            $data[$j] = $data[$i];
            $data[$i] = $var;
        }
    }

    if($flag == 1)
    {
        bubbleSort($data);
    }

    return $data;
}

print_r(bubbleSort($data));




