<?php

/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 17:00
 * Составьте запрос, который извлекает все записи из таблицы users по следующим правилам:

 */

$connect_DB = function ($host = 'localhost', $user = 'root', $password = '13579', $db_name = 'practiceRarus') {
//Соединяемся с базой данных используя наши доступы:
    $link = mysqli_connect($host, $user, $password, $db_name);
//Устанавливаем кодировку:
    mysqli_query($link, "SET NAMES 'utf8'");

    return $link;
};

$query = "SELECT * FROM users WHERE created_at BETWEEN 2018-11-23 AND 2018-12-12 OR house='stark' ORDER BY created_at DESC";

$tamp = htmlspecialchars($query);

$result = mysqli_query($link, $tamp) or die(mysqli_error($link));