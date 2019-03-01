<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 17:00
 * Реализуйте функцию getManWithLessFriends, которая принимает список пользователей и возвращает пользователя,
 * у которого меньше всего друзей.
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
    ['name' => 'Keit', 'friends' => []],
    [
        'name' => 'Rob',
        'friends' => [
            ['name' => 'Taywin', 'gender' => 'male'],
        ],
    ],
];
function getManWithLessFriends($users)
{

    foreach ($users as $elem) {
        $result[$elem['name']] = count($elem['friends']);
    }

    $minFriebds = min($result);

    foreach ($result as $key => $elem) {
        if ($elem == $minFriebds) {
            $name = $key;
        }
    }

    foreach ($users as $elem) {
        if ($elem['name'] == $name) {
            return $elem;
        }
    }

}

