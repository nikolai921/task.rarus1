<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 17:00
 * Реализуйте функцию getDifference, которая принимает на вход два массива, а возвращает массив,
 * составленный из элементов первого, которых нет во втором.
 */

function getDifference($data1, $data2)
{
    if (empty($data1)) {
        $newArray = [];
    } elseif (empty($data2)) {
        $newArray = $var1 = array_unique($data1);
    } else {

        $var1 = array_unique($data1);
        $var2 = array_unique($data2);

        foreach ($var1 as $elem) {
            $flag = 0;
            foreach ($var2 as $elems) {
                if ($elem == $elems) {
                    $flag++;
                }
            }

            if ($flag == 0) {
                $newArray[] = $elem;
            }
        }

    }

    return $newArray;

}

print_r(getDifference([2, 1, 5, 7, 1, 8, 3], [2, 3]));

