<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 17:00
 * Составьте запрос, который извлекает все записи из таблицы юзер по следующим правилам:

Напишите запрос, создающий таблицу users со следующими полями:

 */

$sql = <<<SQL
SELECT count(house) as count FROM users GROUP BY house HAVING house='stark';
SQL;

