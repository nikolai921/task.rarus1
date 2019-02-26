<?php

/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 4:13
 * Реализуйте функцию isPalindrome, которая принимает на вход слово,
 * определяет является ли оно палиндромом и возвращает логическое значение.
 * через сравнение исходной строки с ее перевернутой версией.
 */

$string = 'radarq';

function revers($string)
{
    $length = floor(mb_strlen($string) / 2);
    $flag = true;

    for ($i = 1, $j = -1; $i <= $length || $flag !== false; $i++, $j--) {
        if ($string[$i] !== $string[$j]) {
            $flag = false;
        }
    }
    return $flag;
}

echo revers($string);


