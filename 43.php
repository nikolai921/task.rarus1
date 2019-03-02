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
$link = mysqli_connect('localhost', 'root', '1', 'practiceRarus');

printf("Изначальная кодировка: %s\n", mysqli_character_set_name($link));

if (!mysqli_set_charset($link, "utf8")) {
    printf("Ошибка при загрузке набора символов utf8: %s\n", mysqli_error($link));
    exit();
} else {
    printf("Текущий набор символов: %s\n", mysqli_character_set_name($link));
}

/*
 * В задачи передается массив данных по которым необходимо сделать запрос
 */

$array = [
    'insert' => ['first_name' => 'Arya', 'email' => 'arya@winter.com'],
    'delete' => ['first_name' => 'Sansa'],
    'update' => ['email' => 'tirion@got.com'],
];

function insertUser($link, $array)
{
    if (!empty($array)) {
        foreach ($array as $key => $elem) {
            if ($key == 'insert') {
                $first_name = mysqli_real_escape_string($link, $elem['first_name']);
                $email = mysqli_real_escape_string($link, $elem['email']);
            }
        }
    }
    $insert = <<<SQL
INSERT INTO users (first_name, email) VALUE ('$first_name', '$email');
SQL;

    $result = mysqli_query($link, $insert) or die(mysqli_error($link));
}

function deleteUser($link, $array)
{
    if (!empty($array)) {
        foreach ($array as $key => $elem) {
            if ($key == 'delete') {
                $first_name = mysqli_real_escape_string($link, $elem['first_name']);
            }
        }
    }
    $delete = <<<SQL
DELETE FROM users WHERE first_name = '$first_name';
SQL;

    $result = mysqli_query($link, $delete) or die(mysqli_error($link));
}


function updateUser($link, $array)
{
    if (!empty($array)) {
        foreach ($array as $key => $elem) {
            if ($key == 'update') {
                $email = mysqli_real_escape_string($link, $elem['email']);
            }
        }
    }
    $update = <<<SQL
UPDATE users SET manager = true WHERE email = '$email';
SQL;

    $result = mysqli_query($link, $update) or die(mysqli_error($link));
}

insertUser($link, $array);
deleteUser($link, $array);
updateUser($link, $array);