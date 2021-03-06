<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 16:00
 * Реализуйте функцию union, которая находит объединение всех переданных массивов.
 */

$data = [[3, 2], [2, 2, 1]];

function union(...$data)
{

    if (count($data) == 1) {
        $result = $data[0];
    } else {
        $common = [];
        foreach ($data as $elem) {
            $var = array_merge($common, $elem);
            $common = $var;
        }

        $result = array_values(array_unique($common));
    }
    return $result;
}

