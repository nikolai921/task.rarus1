<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 6:11
 * Реализуйте функцию getIntersectionForSortedArray,
 * которая принимает на вход два отсортированных массива и находит их
 * пересечение. Задачу реализовать двумя способами - используя штатные функции, и перебором элементов массивов
 */

$data1 = [10, 11, 24, 28];
$data2 = [10, 13, 14, 18, 24, 28, 30];

/**
 * Решение за счет штатных функций
 */

function getIntersectionOfSortedArr($array1, $array2)
{
    $result = array_intersect($array1, $array2);
    return $result;
}

print_r(getIntersectionOfSortedArr($data1, $data2));

/**
 * Решение за счет перебора массива
 */
function getIntersectionOfSortedArray($array1, $array2)
{
    $result = [];
    foreach ($array1 as $elem) {
        foreach ($array2 as $elems) {
            if ($elem == $elems) {
                $result[] = $elem;
            }
        }
    }
    return $result;
}

print_r(getIntersectionOfSortedArr($data1, $data2));
