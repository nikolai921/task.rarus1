<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 10:15
 * Реализуйте функцию getIn, которая извлекает из массива
 * (который может быть любой глубины вложенности) значение по указанным ключам.
 */

$keyData = ['user', 'ubuntu'];
$data = [
    'user' => 'ubuntu',
    'hosts' => [
        ['name' => 'web1'],
        ['name' => 'web2']
    ]
];

function getIn($data, $keyData) {

    foreach ($keyData as $elem) {
        if(is_array($data)){
            if(array_key_exists($elem, $data))
            {
                $data = $data[$elem];
                $result = $data[$elem];
            } else {
                $result = null;
            }
        } else {
            $result = null;
        }
    }
    return $result;
}

print_r(getIn($data, $keyData));



