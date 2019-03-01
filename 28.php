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
    if (!empty($string)) {
        $world = explode(' ', $string);
        foreach($world as $elem){
//        { echo ' ' . $elem;
//          $preg[] = preg_replace('#([а-яА-ЯЁёa-zA-Z])#iu', '$1', $elem);
            $var = lcfirst($elem);
            $preg[] = trim($var, " \t\n\r\0\x0B.,!:?;-()/");
        }
        $result = array_count_values($preg);
        unset($result['']);

    }
    return $result;

}

