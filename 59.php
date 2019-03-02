<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 02.03.19
 * Time: 17:40
 * Реализуйте функцию grep, принимающую на вход два параметра:
 * подстроку для сопоставления и шаблон в формате glob, по которому будет происходить поиск.
 */

function grepfile($pattern, $type)
{
    $array = glob("$type");

    foreach ($array as $filename) {
        $string = file($filename);
        $file = explode(' ', $string[0]);
        $count[] = preg_grep("/" . $pattern . "/", $file);
        $result = array_merge(...$count);
    }

    return $result;
}


print_r(grepfile( 'privet', './*'));

