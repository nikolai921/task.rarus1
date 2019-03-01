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
$link = mysqli_connect('localhost', 'root', '13579', 'practiceRarus');
//Устанавливаем кодировку:
mysqli_query($link, "SET NAMES 'utf8'");


$query = "CREATE TABLE course_members(user_id INT, course_id INT, created_at TIMESTAMP)";

$query = "CREATE TABLE courses(name VARCHAR(255), body TEXT, created_at timestamp)";

$query = "CREATE TABLE users(user_first_nam VARCHAR(255), brand VARCHAR(255), model VARCHAR(255))";


function createTable($link, $query)
{
    $tamp = mysqli_real_escape_string($link, $query);

    $result = mysqli_query($link, $tamp) or die(mysqli_error($link));
}

createTable($link, $query);

