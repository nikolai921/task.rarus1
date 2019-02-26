<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 4:59
 * Реализуйте функцию makeCensored, которая заменяет каждое вхождение указанных слов в предложении
 * на последовательность $#%! и возвращает полученную строку.
 */

$sentence = 'When you play the game of thrones, you win or you die';

$word = ['die', 'play', 'game'];

$symbol = '$#%!';

function makeCensored($string, $wordChange, $symbolChange)
{
    $result = $string;

    foreach ($wordChange as $elem) {
        $result = str_replace($elem, $symbolChange, $result);
    }


    return $result;
}

echo makeCensored($sentence, $word, $symbol);