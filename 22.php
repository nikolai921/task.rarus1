<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 10:15
 * Реализуйте функцию getIn, которая извлекает из массива
 * (который может быть любой глубины вложенности) значение по указанным ключам.
 */

$keyData = ['hosts', 1, 'name'];
$data = [
    'user' => 'ubuntu',
    'hosts' => [
        ['name' => 'web1'],
        ['name' => 'web2'],
    ],
];

function getIn($data, $keyData)
{

    if (!empty($keyData)) {
        $keySearch = array_shift($keyData);
//        echo $keySearch;

        if (is_array($data)) {
            if (array_key_exists($keySearch, $data)) {

                $tmp = $data[$keySearch];
//                $result = $data[$keySearch];
                $data = $tmp;

//                print_r($result);
            } else {
                $result = null;
            }
        } else {
            $result = null;
        }

    }

    if (empty($keyData) || $result === null) {
        return $result;
    } else {
        getIn($data, $keyData);
    }

}


print_r(getIn($data, ['hosts', 1, 'name']));


