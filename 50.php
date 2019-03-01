<?php

/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 17:00
 * Составьте запрос, который извлекает все записи из таблицы users по следующим правилам:

 */

/**
 * DESC - обратный порядок, убывание
 * ASC - прямой порядок
 */



$sql = <<<SQL
SELECT * FROM users WHERE created_at BETWEEN 2018-11-23 AND 2018-12-12 OR house='stark' ORDER BY created_at DESC;
SQL;

