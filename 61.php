<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 02.03.19
 * Time: 19:17
 * Реализуйте функцию dump, которая принимает на вход имя файла и структуру данных.
 * После чего она сериализует эту структуру и записывает в файл.
 * Реализуйте функцию load, которая принимает на вход имя файла.
 * После этого она читает содержимое файла и проводит десериализацию.
 */
$structure = [
    ['name' => 'Tirion', 'friends' => [
        ['name' => 'Mira', 'gender' => 'female'],
        ['name' => 'Ramsey', 'gender' => 'male']
    ]],
    ['name' => 'Bronn', 'friends' => []],
    ['name' => 'Sam', 'friends' => [
        ['name' => 'Aria', 'gender' => 'female'],
        ['name' => 'Keit', 'gender' => 'female']
    ]],
    ['name' => 'Keit', 'friends' => []],
    ['name' => 'Rob', 'friends' => [
        ['name' => 'Taywin', 'gender' => 'male']
    ]],
];
function dump($file, $structure)
{
    if(!empty($structure) && !empty($file))
    {
        $stringSerialize = serialize($structure);
        file_put_contents($file, $stringSerialize);
    }
}

dump('Serializer.php', $structure);

function load($file)
{
    if(!empty($file))
    {
        $stringData = file_get_contents($file);
        $data = unserialize($stringData);
    }
    return $data;
}
print_r(load('Serializer.php'));