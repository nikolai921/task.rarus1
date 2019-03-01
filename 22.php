<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 10:15
 * Реализуйте функцию getIn, которая извлекает из массива
 * (который может быть любой глубины вложенности) значение по указанным ключам.
 */

function getIn($data, $keyData)
{

    if (!empty($keyData)) {
        $keySearch = array_shift($keyData);

        if (is_array($data)) {
            if (array_key_exists($keySearch, $data)) {

                $tmp = $data[$keySearch];
                $result = $data[$keySearch];
                $data = $tmp;

            } else {
                $result = null;
            }
        } else {
            $result = null;
        }

    }

    if (empty($keyData)) {
        return $result;
    }

    $result = getIn($data, $keyData);
    return $result;
    
}

print_r(getIn($data, ['name']));


