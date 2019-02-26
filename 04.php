<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 21:06
 * Функция меняет местами переданные аргументы по ссылке
 */

$a = 5;
$b = 8;

function swap(&$a, &$b)
{

    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;

    $result = $a . ' ' . $b;
    return $result;
}

print_r(swap($a, $b));