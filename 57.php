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
    $elementCurrent = (explode('/', $currentDir));
    $elementTarget = explode('/', $targetDir);

    $way = '';
    $param['word'] = '';

    if ($elementTarget[0] == '') {
        $way = $targetDir;
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


        $sum = array_sum($param);
        $count = count($elementCurrent);
        $interval = $count - $sum - 1;
        $result = array_splice($elementCurrent, 1, $interval);
        $way = '/' . implode('/', $result);

        $way .= $param['word'];
    }
    return $way;
}


