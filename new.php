<?php

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


$query = "CREATE TABLE users (
    first_name varchar(255),
    email varchar(255),
    birthday timestamp
);

function createTable($link, $query)
{
    $tamp = htmlspecialchars($query);

    $result = mysqli_query($link, $tamp) or die(mysqli_error($link));
}

//createTable($link, $query);




$update = "UPDATE users SET manager=true WHERE email='tirion@got.com'";

$delete = "DELETE FROM users WHERE first_name='Sansa'";

$insert = "INSERT INTO cars SET user_first_name='Kiril', brand='BMV', model='X6'";

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
//deleteUser($link, $delete);
//updateUser($link, $update);