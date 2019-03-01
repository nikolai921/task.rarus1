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

//Соединяемся с базой данных используя наши доступы:
    $link = mysqli_connect('localhost', 'root', '13579', 'practiceRarus');
//Устанавливаем кодировку:
    mysqli_query($link, "SET NAMES 'utf8'");

$update = <<<SQL
UPDATE users5 SET manager = true WHERE email = petya;
SQL;

$delete = <<<SQL
DELETE FROM users5 WHERE first_name = Sansa;
SQL;

$insert = <<<SQL
INSERT INTO users5 SET first_name = Arya, email = vanya;
SQL;


function insertUser($link, $query)
{
    $tamp = mysqli_real_escape_string($link, $query);

    $result = mysqli_query($link, $tamp) or die(mysqli_error($link));
}

function deleteUser($link, $query)
{
    $tamp = mysqli_real_escape_string($link, $query);

    $result = mysqli_query($link, $tamp) or die(mysqli_error($link));
}


function updateUser($link, $query)
{
    $tamp = mysqli_real_escape_string($link, $query);

    $result = mysqli_query($link, $tamp) or die(mysqli_error($link));
}

insertUser($link, $insert);
deleteUser($link, $delete);
updateUser($link, $update);