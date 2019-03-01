<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 17:00
 * Реализуйте функцию takeOldest, которая принимает на вход список пользователей и возвращает самых взрослых.
 * Количество возвращаемых пользователей задается вторым параметром, который по-умолчанию равен единице.
 */

$users = [
    ['name' => 'Tirion', 'birthday' => '1988-11-19'],
    ['name' => 'Sam', 'birthday' => '1999-11-22'],
    ['name' => 'Rob', 'birthday' => '1975-01-11'],
    ['name' => 'Sansa', 'birthday' => '2001-03-20'],
    ['name' => 'Tisha', 'birthday' => '1992-02-27'],
];


function getSortedNames($data, $search = 1)
{
    foreach ($data as $elem) {
        $date = strtotime($elem['birthday']);
        $user = $elem['name'];
        $newData[$user] = $date;
    }

    asort($newData);
    $result = array_slice($newData, 0, $search);

    foreach ($result as $key => $elems) {

        foreach ($data as $elem) {
            if ($elem['name'] == $key) {
                $old[] = $elem;
            }
        }
    }
    return $old;
}


