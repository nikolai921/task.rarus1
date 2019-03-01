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
CREATE TABLE users(
id INT(100) AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(255) NOT NULL UNIQUE,
email VARCHAR(255) NOT NULL,
created_at VARCHAR(255) NOT NULL
);

CREATE TABLE topics (
 id bigint AUTO_INCREMENT PRIMARY KEY, 
 user_id bigint REFERENCES users(id), 
 body text, created_at TIMESTAMP NOT NULL
);
SQL;

