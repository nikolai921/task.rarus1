<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 4:13
 * Реализуйте функцию addPrefix, которая добавляет к каждому элементу массива переданный префикс
 * и возвращает получившийся массив. Функция предназначена для работы со строковыми элементами. Аргументы:
 * Массив Префикс После префикса автоматически добавляется пробел.
 */

$names = ['john', 'smith', 'karl'];

function addPrefix($array, $prefix)
{
    foreach($array as $key => $elem)
    {
        $newNames[$key] = $prefix . ' ' . $elem;
    }

    return $newNames;
}

$result = addPrefix($names, 'Mr');

print_r($result);