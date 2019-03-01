<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 17:00
 * Реализуйте функцию getGirlFriends, которая принимает на вход список пользователей и возвращает
 * плоский список подруг всех пользователей (без сохранения ключей).
 */

$users = [
    [
        'name' => 'Tirion',
        'friends' => [
            ['name' => 'Mira', 'gender' => 'female'],
            ['name' => 'Ramsey', 'gender' => 'male'],
        ],
    ],
    ['name' => 'Bronn', 'friends' => []],
    [
        'name' => 'Sam',
        'friends' => [
            ['name' => 'Aria', 'gender' => 'female'],
            ['name' => 'Keit', 'gender' => 'female'],
        ],
    ],
    [
        'name' => 'Rob',
        'friends' => [
            ['name' => 'Taywin', 'gender' => 'male'],
        ],
    ],
];

function getGirlFriends($data)
{
    $result = [];

    foreach ($data as $elem) {
        foreach ($elem['friends'] as $friend) {
            if ($friend['gender'] == 'female') {
                $result[] = $friend;
            }
        }

    }
    return $result;
}


