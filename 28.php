<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 14:00
 * Реализовать задачу из задания 27 в консольном варианте. В качестве исходного текста использовать произведение
 * Толстой Лев - Война и мир. Текст скачаете в интернете.
 */



function wordsCount($path)
{
    $string = file_get_contents($path);
    if(!empty($string))
    {
        $world = explode(' ', $string);

        $result = array_count_values($world);
        unset($result['']);

    }
    return $result;

}

print_r(wordsCount($argv[1]));
