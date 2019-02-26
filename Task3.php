<?php

/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 4:13
 * Реализуйте функцию reverse, которая переворачивает цифры в переданном числе:
 */

$number = -123;

function reverse(int $number) : int
{
    if($number > 0)
    {
        $result = strrev($number);
    } else
    {
        $result = abs(strrev($number))*-1;
    }



    return $result;
}


echo reverse($number);
<?php
