<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 17:00
 * Составьте запрос, который извлекает все записи из таблицы юзер по следующим правилам:

Пользователи должны быть рождены позже 23 октября 1999 года. Поле birthday.
Выборка отсортирована в алфавитном порядке по полю first_name
Нужно извлечь только три записи

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


$insert = ["INSERT INTO cars SET user_first_name='Kiril', brand='BMV', model='X6'",
    "INSERT INTO cars SET user_first_name='Petr', brand='BMV', model='X6'",
    "INSERT INTO cars SET user_first_name='Vasia', brand='BMV', model='X6'",
    "INSERT INTO cars SET user_first_name='Alex', brand='BMV', model='X6'",
    "INSERT INTO cars SET user_first_name='Maks', brand='BMV', model='X6'"];

//print_r($insert);

function insertUser($link, $insert)
{
    foreach($insert as $elem)
    { print_r($elem);
        $tamp = htmlspecialchars($elem);



        $result = mysqli_query($link, $tamp) or die(mysqli_error($link));
    }

}

insertUser($link, $insert);

$query = "
CREATE TABLE cars(
user_first_name VARCHAR(255),
brand VARCHAR(255),
model VARCHAR(255)
)";

function createTable($link, $query)
{
    $tamp = htmlspecialchars($query);

    $result = mysqli_query($link, $tamp) or die(mysqli_error($link));
}

//createTable($link, $query);