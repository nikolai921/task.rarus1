<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 4:13
 * Реализуйте функцию buildDefinitionList, которая генерирует html список определений (теги dl, dt и dd)
 * и возвращает получившуюся строку.
 */

$definitions = [
    ['Блямба', 'Выпуклость, утолщения на поверхности чего-либо'],
    ['Бобр', 'Животное из отряда грызунов'],
];


function buildDefinitionList($data)
{
    $string = '<dl>';

    foreach ($data as $elem)
    {
        $string .= '<dt>'.$elem[0].'</dt><dd>'.$elem[1].'</dd>';
    }

    $string .= '<dl>';

    return $string;
}

echo buildDefinitionList($definitions);