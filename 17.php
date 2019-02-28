<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 5:31
 * еализуйте функцию countUniqChars, которая получает на вход строку и считает,
 * сколько символов (уникальных символов) использовано в этой строке.
 */

$string = 'yyab';

function countUniqChars($string)
{
    if (empty($string)) {
        $count = 0;
    } else {
        $length = mb_strlen($string);
        $result = '';

        for ($i = 0; $i < $length; $i++) {
            $elem = $string[$i];
            $unique = preg_match('#' . $elem . '#', $result);
            if ($unique == 0) {
                $result .= $elem;
            }
        }
        $count = mb_strlen($result);
    }

    return $count;
}

echo countUniqChars($string);

