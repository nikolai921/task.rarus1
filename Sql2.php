<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

//Устанавливаем доступы к базе данных:
$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = ''; //пароль, по умолчанию пустой
$db_name = 'dicisionSQL'; //имя базы данных


//Соединяемся с базой данных используя наши доступы:
$link = mysqli_connect($host, $user, $password, $db_name);

//Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
mysqli_query($link, "SET NAMES 'utf8'");

// Операции создания БД

// $query = " CREATE DATABASE dicisionSQL";
// $result = mysqli_query($link, $query) or die(mysqli_error($link));

// Операции создания таблицы

// $query = " CREATE TABLE family(
// id INT(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
// name VARCHAR(255),
// surname VARCHAR(255),
// age INT(100),
// address INT(100),
// family_id INT(100)
// )";
// $result = mysqli_query($link, $query) or die(mysqli_error($link));

// Операции создания таблицы

$query = " CREATE TABLE users(
id INT(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
login VARCHAR(255),
password VARCHAR(255)
)";

$result = mysqli_query($link, $query) or die(mysqli_error($link));

// Удаление таблицы

// $query = " DROP TABLE goods";

// $result = mysqli_query($link, $query) or die(mysqli_error($link));


// Добавить поле

// $query = "ALTER TABLE user ADD COLUMN son_id INT(100) NOT NULL";

// $result = mysqli_query($link, $query) or die(mysqli_error($link));

// Удалить поле

// $query = "ALTER TABLE season DROP COLUMN brand_id";

// $result = mysqli_query($link, $query) or die(mysqli_error($link));

// var_dump($result);


