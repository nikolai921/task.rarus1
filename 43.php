<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 17:00
 * Запрос, который удаляет пользователя с именем Sansa Запрос, который вставляет в базу пользователя с
 * именем Arya и почтой arya@winter.com Запрос, который устанавливает флаг manager в true для пользователя с
 * емейлом tirion@got.com.
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


$update = "UPDATE users SET manager=true WHERE email='tirion@got.com'";

$delete = "DELETE FROM users WHERE first_name='Sansa'";

$insert = "INSERT INTO users SET first_name='Arya', email='arya@winter.com'";


function insertUser($link, $query)
{
    $tamp = htmlspecialchars($query);

    $result = mysqli_query($link, $tamp) or die(mysqli_error($link));
}

function deleteUser($link, $query)
{
    $tamp = htmlspecialchars($query);

    $result = mysqli_query($link, $tamp) or die(mysqli_error($link));
}


function updateUser($link, $query)
{
    $tamp = htmlspecialchars($query);

    $result = mysqli_query($link, $tamp) or die(mysqli_error($link));
}

insertUser($link, $insert);
deleteUser($link, $delete);
updateUser($link, $update);