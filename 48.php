<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 17:00
 * Напишите запрос обновляющий таблицу структуры

 */

$sql = <<<SQL
ALTER TABLE users 
MODIFY COLUMN email VARCHAR (255) NOT NULL UNIQUE,
DROP COLUMN age,
CHANGE name first_name VARCHAR (255) NOT NULL,
ADD COLUMN created_at TIMESTAMP;
SQL;





