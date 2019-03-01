<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 10:15
 * Реализуйте функцию getSortedNames, которая принимает на вход список пользователей, извлекает их имена,
 * сортирует и возвращает отсортированный список имен.
 */

$users = [
    ['name' => 'Bronn', 'gender' => 'male', 'birthday' => '1973-03-23'],
    ['name' => 'Reigar', 'gender' => 'male', 'birthday' => '1973-11-03'],
    ['name' => 'Eiegon', 'gender' => 'male', 'birthday' => '1963-11-03'],
    ['name' => 'Sansa', 'gender' => 'female', 'birthday' => '2012-11-03'],
];

/**
 * $search --- параметр поиска
 */

$search = 'name';

function getSortedNames($data, $search)
{
    foreach ($data as $elem) {

        if (array_key_exists($search, $elem)) {
            $listName[] = $elem[$search];
        }
    }
    sort($listName);
    return $listName;
}

