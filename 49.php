<?php
$connect_DB = function ($host = 'localhost', $user = 'root', $password = '13579', $db_name = 'practiceRarus') {
//Соединяемся с базой данных используя наши доступы:
    $link = mysqli_connect($host, $user, $password, $db_name);
//Устанавливаем кодировку:
    mysqli_query($link, "SET NAMES 'utf8'");

    return $link;
};

$query = "SELECT first_name FROM users ORDER BY first_name DESC";

$tamp = htmlspecialchars($query);

$result = mysqli_query($link, $tamp) or die(mysqli_error($link));