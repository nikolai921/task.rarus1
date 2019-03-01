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


//Устанавливаем доступы к базе данных:
$host = 'localhost';
$user = 'root';
$password = '13579';
$db_name = 'practiceRarus';

//Соединяемся с базой данных используя наши доступы:
$link = mysqli_connect($host, $user, $password, $db_name);

//Устанавливаем кодировку:
mysqli_query($link, "SET NAMES 'utf8'");

$date = strtotime('23-10-1999');
echo $date;


$query = "SELECT * FROM users WHERE birthday > DATE('1999-10-23') ORDER BY first_name ASC LIMIT 3";

function insertUser($link, $query)
{
    $tamp = htmlspecialchars($query);

    $result = mysqli_query($link, $tamp) or die(mysqli_error($link));

    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) {
        ;
    }

    return $data;
}

print_r(insertUser($link, $query));