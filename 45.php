<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 17:00
 * Создайте таблицу cars со следующими полями: user_first_name - имя пользователя
 * (соответствующее имени в таблице users) brand - марка машины model - конкретная модель
 * Добавьте в таблицу users две произвольные записи. (смотрите структуру таблицы внутри базы)
 * Добавьте в таблицу cars 5 произвольных записей. Две из них должны указывать на одного пользователя
 * (соответствие по имени пользователя), а три других - на другого.
 */

error_reporting(E_ALL);
ini_set('display_errors', 'on');

//Соединяемся с базой данных используя наши доступы:
$link = mysqli_connect('localhost', 'root', '13579', 'practiceRarus');
//Устанавливаем кодировку:
mysqli_query($link, "SET NAMES 'utf8'");

/*
 * Задача реализована на проверку наличия имя Пользователя в таблицы,
 * при наличии производится запрос на добавление в таблицу,
 * иначе нет.
 */


$insert = [
    ['user_first_name' => 'Kiril', 'brand' => 'BMV', 'model' => 'X6'],
    ['user_first_name' => 'Petr', 'brand' => 'MRC', 'model' => 'M5'],
    ['user_first_name' => 'Alex', 'brand' => 'TOY', 'model' => 'D4'],
    ['user_first_name' => 'Maxim', 'brand' => 'HUN', 'model' => 'R8'],
    ['user_first_name' => 'Gari', 'brand' => 'LAD', 'model' => 'T3'],
    ['user_first_name' => 'Mark', 'brand' => 'LAD', 'model' => 'T5'],
    ['user_first_name' => 'Maxim', 'brand' => 'LAD', 'model' => 'T8'],
    ['user_first_name' => 'Alex', 'brand' => 'LAD', 'model' => 'K5'],
    ['user_first_name' => 'Maxim', 'brand' => 'LAD', 'model' => 'B3'],
];

function insertUser($link, $insert)
{
    foreach ($insert as $elem) {
        $user_first_name = mysqli_real_escape_string($link, $elem['user_first_name']);
        $brand = mysqli_real_escape_string($link, $elem['brand']);
        $model = mysqli_real_escape_string($link, $elem['model']);

        $user_availability = "SELECT * FROM users WHERE first_name = '$user_first_name'";

        $check = mysqli_query($link, $user_availability) or die(mysqli_error($link));

        $var = mysqli_fetch_assoc($check);

        if (!empty($var)) {
            $tamp = "INSERT INTO cars SET user_first_name='$user_first_name', brand='$brand', model='$model'";

            $result = mysqli_query($link, $tamp) or die(mysqli_error($link));
        }

    }

}

insertUser($link, $insert);

