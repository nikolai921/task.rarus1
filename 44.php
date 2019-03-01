<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 17:00
 * Составьте запрос, который извлекает все записи из таблицы юзер по следующим правилам:
 *
 * Пользователи должны быть рождены позже 23 октября 1999 года. Поле birthday.
 * Выборка отсортирована в алфавитном порядке по полю first_name
 * Нужно извлечь только три записи
 */

error_reporting(E_ALL);
ini_set('display_errors', 'on');


//Соединяемся с базой данных используя наши доступы:
$link = mysqli_connect('localhost', 'root', '13579', 'practiceRarus');
//Устанавливаем кодировку:
mysqli_query($link, "SET NAMES 'utf8'");


$query = <<<SQL
SELECT * FROM users WHERE birthday > 1990-10-23 ORDER BY first_name ASC LIMIT 3;
SQL;

function insertUser($link, $query)
{
    $tamp = mysqli_real_escape_string($link, $query);

    $result = mysqli_query($link, $tamp) or die(mysqli_error($link));

    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) {
    };


    return $data;
}

print_r(insertUser($link, $query));