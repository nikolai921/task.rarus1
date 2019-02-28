<?php

/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 17:00
 * Составьте запрос, который извлекает все записи из таблицы users по следующим правилам:
 */

$query = "SELECT * FROM users WHERE birthday < DATE('2002-10-03') ORDER BY first_name ASC LIMIT 2,3";