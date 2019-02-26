<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 16:00
 * Реализуйте функцию union, которая находит объединение всех переданных массивов.
 */

$data = [['a', 3, false], [true, false, 3], [false, 5, 8]];

function union($data)
{
    $common = [];
    foreach ($data as $elem) {
        $common = array_merge($common, $elem);
    }

    return array_values(array_unique($common));
}

print_r(union($data));