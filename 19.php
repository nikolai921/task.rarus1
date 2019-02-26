<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 6:11
 * Реализуйте функцию checkIfBalanced, которая проверяет балансировку круглых скобок в арифметических выражениях.
 */

$string = '(4 + 3))';

function checkIfBalanced($string)
{
    $openValue = preg_match_all('#\(#', $string);
    $closeValue = preg_match_all('#\)#', $string);
    if ($openValue == $closeValue) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

print_r(checkIfBalanced($string));