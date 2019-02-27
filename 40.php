<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 17:00
 * Реализуйте функцию without, функция должна принимать любое число аргументов, где первый аргумент массив,
 * а все остальные - значения, которые нужно исключить из переданного массива.
 */

$data = [['3', 2], 0, 5, 11];

function without($data)
{
    $place_of_search = array_shift($data);

    foreach ($data as $elem) {
        foreach ($place_of_search as $key => $elems) {
            if ($elem == $elems) {
                unset($place_of_search[$key]);
            }
        }
        return $place_of_search;
    }
}


print_r(without($data));