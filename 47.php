<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 17:00
 * Составьте запрос, который извлекает все записи из таблицы юзер по следующим правилам:

Напишите запрос, создающий таблицу users со следующими полями:

 */

$connect_DB = function ($host = 'localhost', $user = 'root', $password = '13579', $db_name = 'practiceRarus') {
//Соединяемся с базой данных используя наши доступы:
    $link = mysqli_connect($host, $user, $password, $db_name);
//Устанавливаем кодировку:
    mysqli_query($link, "SET NAMES 'utf8'");

    return $link;
};


/**
 *  Первый запрос таблица users
 */

$query = "
CREATE TABLE users(
id INT(100) AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(255) NOT NULL UNIQUE,
email VARCHAR(255) NOT NULL,
created_at VARCHAR(255) NOT NULL
)";

/**
 *  Второй запрос таблица topics
 */

$query = "
CREATE TABLE topics(
id INT(100) AUTO_INCREMENT PRIMARY KEY,
user_id INT NOT NULL,
body VARCHAR(255) NOT NULL,
created_at VARCHAR(255) NOT NULL,
FOREIGN  KEY (user_id)
REFERENCES users (id)
)";

$tamp = htmlspecialchars($query);

$result = mysqli_query($connect_DB(), $tamp) or die(mysqli_error($connect_DB()));