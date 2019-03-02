<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 17:00
 * Напишите запрос создающий таблицу courses со следующими полями, запрос обернуть в функцию createTable на php
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

$course_members = <<<SQL
CREATE TABLE course_members(user_id INT, course_id INT, created_at TIMESTAMP)
SQL;

$courses = <<<SQL
CREATE TABLE courses(name VARCHAR(255), body TEXT, created_at timestamp)
SQL;

$users = <<<SQL
CREATE TABLE users(user_first_nam VARCHAR(255), brand VARCHAR(255), model VARCHAR(255))
SQL;

function createTable($link, $query)
{
    $tamp = mysqli_real_escape_string($link, $query);

    $result = mysqli_query($link, $tamp) or die(mysqli_error($link));
}

createTable($link, $course_members);
createTable($link, $courses);
createTable($link, $users);
