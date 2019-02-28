<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 17:00
 * Напишите запрос обновляющий таблицу структуры

 */

$connect_DB = function ($host = 'localhost', $user = 'root', $password = '13579', $db_name = 'practiceRarus') {
//Соединяемся с базой данных используя наши доступы:
    $link = mysqli_connect($host, $user, $password, $db_name);
//Устанавливаем кодировку:
    mysqli_query($link, "SET NAMES 'utf8'");

    return $link;
};

$query = "
ALTER TABLE users 
MODIFY COLUMN email VARCHAR (255) NOT NULL UNIQUE,
DROP COLUMN age,
CHANGE name first_name VARCHAR (255) NOT NULL,
ADD COLUMN created_at TIMESTAMP 
";
$tamp = htmlspecialchars($query);

$result = mysqli_query($connect_DB(), $tamp) or die(mysqli_error($connect_DB()));



