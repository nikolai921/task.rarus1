<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 10:15
 * Реализуйте функцию getIn, которая извлекает из массива
 * (который может быть любой глубины вложенности) значение по указанным ключам.
 */

$keyData = ['hosts', 0];
$data = [
    'user' => 'ubuntu',
    'hosts' => [
        ['name' => 'web1'],
        ['name' => 'web2']
    ]
];

function getIn($data, $keyData)
{
    foreach($keyData as $elem)
    {
        if (array_key_exists($elem, $data) != false) {
            $data = $data[$elem];
        } else {
            $data = null;
        }

    }
    return $data;
}

print_r(getIn($data, $keyData));



