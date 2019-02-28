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
//        print_r($data);

        if (is_array($data)) {
            if (array_key_exists($keySearch, $data)) {

                $tmp = $data[$keySearch];
                $result = $tmp;
                $data = $tmp;

            }
        }

    }
//    print_r($keyData);

    if (!empty($keyData)) {
        getIn($data, $keyData);
    }

    return $result;

}


print_r(getIn($data, $keyData));


