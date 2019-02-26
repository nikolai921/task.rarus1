<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 5:18
 * Реализуйте функцию getSameCount, которая считает количество общих уникальных элементов для двух массивов.
 */

$data1 = [1, 10, 3, 4];
$data2 = [10, 100, 35, 1, 4];

function getSameCount($array1, $array2)
{
    $result = array_intersect($array1, $array2);
    return $result;
}

print_r(getSameCount($data1, $data2));
