<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 02.03.19
 * Time: 14:41
 * Реализуйте функцию cd, принимающую на вход два параметра: текущую директорию и путь для перехода.
 * Функция должна вернуть директорию, в которую необходимо перейти.
 */

function cdWay($currentDir, $targetDir)
{
    $elementCurrent = explode('/', $currentDir);
    $elementTarget = explode('/', $targetDir);

    $way = '';
    $param['word'] = '';

    if ($elementTarget[0] == '') {
        $way = $currentDir;
    } else {
        foreach ($elementTarget as $elem) {
            if ($elem == '.') {
                $param[] = 0;
            } elseif ($elem == '..') {
                $param[] = 1;
            } else {
                $param['word'] .= '/' . $elem;
            }
        }


        $flag = 1;
        foreach ($param as $elem) {
            if ($elem == 1) {
                $way .= '/' . $elementCurrent[$flag];
                $flag++;
            }
        }

        $way .= $param['word'];
    }
    return $way;
}

print_r(cdWay('/1/2/3/4/5/6/7/8/etc', '../../../../././anotherpath/d/f/g'));
