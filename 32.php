<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 16:40
 * Слаг - часть адреса сайта которая используется для идентификации ресурса в Человекопонятном виде.
 * Без слага /posts/3, со слагом /posts/my-super-post, где слаг это my-super-post.
 */

$string = '';

function slugify($string)
{

    if (empty($string)) {
        $result = '';
    } else {

        $trim = trim($string);

        $result = preg_replace('#\s+#', '-', $trim);
        return strtolower($result);

    }

}

print_r(slugify(''));