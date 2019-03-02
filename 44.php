<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 17:00
 * Составьте запрос, который извлекает все записи из таблицы юзер по следующим правилам:
 *
 * Пользователи должны быть рождены позже 23 октября 1999 года. Поле birthday.
 * Выборка отсортирована в алфавитном порядке по полю first_name
 * Нужно извлечь только три записи
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


$array = [
    'param' => ['date' => '1990-10-23', 'number' => 3],
];

function selecttUser($link, $array)
{
    if (!empty($array)) {
        foreach ($array as $key => $elem) {
            if ($key == 'param') {
                $date = mysqli_real_escape_string($link, $elem['date']);
                $number = mysqli_real_escape_string($link, $elem['number']);
            }
        }
    }
    $insert = <<<SQL
SELECT * FROM users WHERE DATE(birthday) > '$date' ORDER BY first_name ASC LIMIT $number;
SQL;

    $result = mysqli_query($link, $insert) or die(mysqli_error($link));

    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) {
    };

    return $data;
}

print_r(selecttUser($link, $array));