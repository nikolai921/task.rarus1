<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 01.03.19
 * Time: 5:56
 *Создайте таблицу article_categories с двумя полями:

id - автогенерируемый первичный ключ name - текстовое поле Добавьте в эту таблицу две произвольные записи
 *
 */

$sql = <<<SQL
CREATE TABLE article_categories( id bigint PRIMARY KEY AUTO_INCREMENT, name text);
INSERT INTO article_categories (name) VALUES ('Petr'), ('Alex');
SQL;
