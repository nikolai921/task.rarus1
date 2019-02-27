<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 11:15
 * Реализуйте функцию pick, которая извлекает из переданного массива все элементы
 * по указанным ключам и возвращает новый массив.
 */

$data = [
    ['none']
];

$dataKey = ['user', 'os'];

function pick($data, $dataKey)
{
    $result = [];
    if (!empty($data) && !empty($dataKey)) {
        foreach ($dataKey as $elem) {

            if (array_key_exists($elem, $data)) {
                $result[$elem] = $data[$elem];
            }
        }
    }
    return $result;
}

print_r(pick($data, $dataKey));