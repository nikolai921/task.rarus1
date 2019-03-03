<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 14:00
 * Реализуйте набор функций, для работы со словарём, построенным на хеш-таблице.
 * Для простоты, наша реализация не поддерживает разрешение коллизий.
 */

function make()
{
    return $data = [];
}

$map = make();

function get(&$map, $key, $default=null)
{
    $index = crc32($key)%1000;
    if(array_key_exists($index,$map) === true)
    {
        $result = $map[$index];
    } else {
        $result = $default;
    }

    return $result;
}

function set(&$map, $key, $value)
{
    $index = crc32($key)%1000;
    if(array_key_exists($index,$map) === true) {
        $result = false;
    } else
    {
        $map[$index] = $value;
        $result = true;
    }
    return $result;
}






