<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 21:13
 */

function discriminant($a, $b, $c)
{
    $discriminant = pow($b, 2) - 4 * $a * $c;
    if ($discriminant > 0) {
        $sqrtDiscr = sqrt($discriminant);
        $x1 = (-$b + $sqrtDiscr) / 2 * $a;
        $x2 = (-$b - $sqrtDiscr) / 2 * $a;
        $result = 'x = ' . $x1 . ', ' . $x2;
    } elseif ($discriminant == 0) {
        $result = 'x = ' . $x = -$b / 2 * $a;
    } else {
        $result = 'Нет вещественных корней';
    }
    return $result;
}

print_r(discriminant(4, 2, 7));