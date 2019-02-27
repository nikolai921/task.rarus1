<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 14:00
 * Реализуйте функцию wordsCount, которая считает количество одинаковых слов в предложении.
 * Результатом функции является ассоциативный массив, в ключах которого слова из исходного текста,
 * а значения это количество повторений.
 */

$string = '  one      two       one     ';


function wordsCount($string)
{
    if(!empty($string))
    {
        $world = explode(' ', $string);

        $result = array_count_values($world);
        unset($result['']);

    } else
    {
        $result = [];
    }
    return $result;

}
print_r(wordsCount($string));