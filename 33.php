<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 14:00
 * Реализуйте анонимную функцию, которая принимает на вход строку и возвращает ее последний символ
 * (или null если строка пустая). Запишите созданную функцию в переменную $last.
 */


$last = function ($string) {
    if (empty($string)) {
        $last = null;
    } else {
        $last = $string[-1];
    }
    return $last;
};


