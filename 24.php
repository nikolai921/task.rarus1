<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 12:05
 * Реализуйте функцию genDiff, которая возвращает ассоциативный массив, в котором каждому ключу из исходных
 * массивов соответствует одно из четырёх значений: added, deleted, changed или unchanged.
 */

$array1 = ['one' => 'eon', 'two' => 'two', 'four' => true];
$array2 = ['two' => 'own', 'zero' => 4, 'four' => true];

function genDiff($array1, $array2)
{
    $merge = array_merge($array1, $array2);

    foreach ($merge as $key => $elem) {
        $condition1 = array_key_exists($key, $array1);
        $condition2 = array_key_exists($key, $array2);
        if ($condition1 !== true && $condition2 === true) {
            $result[$key] = 'added';
        }
        if ($condition1 === true && $condition2 !== true) {
            $result[$key] = 'deleted';
        }
        if ($condition1 === $condition2) {
            if ($array1[$key] == $array2[$key]) {
                $result[$key] = 'unchanged';
            } else {
                $result[$key] = 'changed';
            }
        }

    }

    return $result;
}

