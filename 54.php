<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 17:00
 * Составьте запрос, который считает количество пользователей рожденных (birthday)
 * в каждом году (из тех что есть в birthday) по следующим правилам:
 */

/**
 * DESC - обратный порядок, убывание
 * ASC - прямой порядок
 */

$sql = <<<SQL
SELECT DATE_FORMAT(birthday, '%Y') as year, count(birthday) as count FROM users WHERE birthday IS NOT NULL GROUP BY DATE_FORMAT(birthday, '%Y') ORDER BY year ASC;
SQL;

