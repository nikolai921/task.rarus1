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

//Устанавливаем доступы к базе данных:
$host = 'localhost';
$user = 'root';
$password = '13579';
$db_name = 'practiceRarus';

//Соединяемся с базой данных используя наши доступы:
$link = mysqli_connect($host, $user, $password, $db_name);

//Устанавливаем кодировку:
mysqli_query($link, "SET NAMES 'utf8'");


//Запрос
//$query = "
// CREATE TABLE course_members(
// id INT(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
// user_id INT,
// course_id INT,
// created_at TIMESTAMP
// )";

//$query = "
// CREATE TABLE courses(
// id INT(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
// name VARCHAR(255),
// body TEXT,
// created_at timestamp
// )";

$query = "
 CREATE TABLE users(
 id INT(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
 first_name VARCHAR(255),
 email VARCHAR(255),
 manager boolean
 )";


function createTable($link, $query)
{
    $tamp = htmlspecialchars($query);

    $result = mysqli_query($link, $tamp) or die(mysqli_error($link));
}

createTable($link, $query);











//$CoursesData = ['courses' =>
//    ['id' => ['INT(100)', 'NOT NULL', 'AUTO_INCREMENT', 'PRIMARY KEY'],
//    'name' => ['VARCHAR(255)'],
//    'body' => ['TEXT'],
//    'created_at' => ['TIMESTAMP']]
//];
//
//foreach($CoursesData as $key => $elem) {
//    $query = "CREATE TABLE $key(";
//
//    foreach ($elem as $keys => $elems) {
//        $query .= " $keys";
//        foreach ($elems as $param) {
//            $query .= " $param";
//
//
//        }
//        $query .= ",";
//    }
//    $query .= ")";
//
//}
//
//
//
//$quer = '"$query"';

//echo $quer;
//
//$result = mysqli_query($link, $quer) or die(mysqli_error($link));

