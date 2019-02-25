<?php

//Реализуйте функцию isPalindrome, которая принимает на вход слово,
// определяет является ли оно палиндромом и возвращает логическое значение.
//через сравнение исходной строки с ее перевернутой версией.

$string = 'radar';

function revers($string)
{
    $length = floor(strlen($string)/2);
    $flag = 'true';

    for($i = 1, $j = -1; $i <= $length || $flag == 'false'; $i++, $j--)
    {
        if($string[$i] !== $string[$j])
        {
            $flag = 'false';
        }
    }
    return $flag;
}

echo revers($string);


