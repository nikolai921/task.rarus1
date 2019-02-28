<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 17:00
 * Составьте запрос, который считает количество пользователей рожденных (birthday)
 * в каждом году (из тех что есть в birthday) по следующим правилам:
 */

$query = "SELECT DATE_FORMAT(birthday, '%Y') as year, count(birthday) as count  FROM users8 GROUP BY birthday HAVING birthday != NULL";