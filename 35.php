<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 17:00
 * Реализуйте функцию getChildren, которая принимает на вход список пользователей
 * и возвращает плоский список их детей. Дети каждого пользователя хранятся в виде массива в ключе children
 */

$users = [
    [
        'name' => 'Tirion',
        'children' => [
            ['name' => 'Mira', 'birdhday' => '1983-03-23'],
        ],
    ],
    ['name' => 'Bronn', 'children' => []],
    [
        'name' => 'Sam',
        'children' => [
            ['name' => 'Aria', 'birdhday' => '2012-11-03'],
            ['name' => 'Keit', 'birdhday' => '1933-05-14'],
        ],
    ],
    [
        'name' => 'Rob',
        'children' => [
            ['name' => 'Tisha', 'birdhday' => '2012-11-03'],
        ],
    ],
];

function getChildren($data)
{
    $result = [];

    foreach ($data as $elem) {
        foreach ($elem['children'] as $elems) {
            $result[] = $elems;
        }

    }
    return $result;
}

print_r(getChildren($users));