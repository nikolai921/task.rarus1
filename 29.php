<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 15:20
 * Реализуйте функцию sayPrimeOrNot, которая проверяет переданное число на простоту и печатает на экран yes или no.
 * Подсказки Цель этой задачи — научиться отделять чистый код от кода с побочными эффектами.
 */

function sayPrimeOrNot($number)
{
    if(empty($number))
    {
        return false;
    } else
    {
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            } else {
                return true;
            }
        }
    }

}

function say($result)
{
    if ($result == true) {
        $res = 'Yes';
    } else {
        $res = 'No';
    }
    return $res;
}

$number = 0;

$PrimeOrNot = sayPrimeOrNot($number);

print_r(say($PrimeOrNot));

