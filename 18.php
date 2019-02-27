<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 6:11
 * Реализуйте функцию bubbleSort, которая сортирует массив используя пузырьковую сортировку.
 * Постарайтесь не подглядывать в текст теории и попробуйте воспроизвести алгоритм по памяти.
 */

$data = [];

function bubbleSort($data)
{
    $count = count($data);

    for($i = 0; $i < $count; $i++)
    {
        for($j = 0; $j < $count; $j++)
        {
            if ($data[$i] < $data[$j]) {
                $var = $data[$j];
                $data[$j] = $data[$i];
                $data[$i] = $var;
            }
        }

    }
        return $data;
}

print_r(bubbleSort($data));





