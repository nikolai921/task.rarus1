<?php

/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 4:13
 * Реализуйте функцию isPalindrome, которая принимает на вход слово,
 * определяет является ли оно палиндромом и возвращает логическое значение.
 * Решите задачу без использования реверса строки.
 */

$string = 'mam';

function revers($string)
{
    $revers = strrev($string);
    if ($string == $revers) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

echo revers($string);


