<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 01.03.19
 * Time: 5:19
 */

$sql = <<<SQL
SELECT topics.id, users.first_name FROM users LEFT JOIN topics ON users.id = topics.user_id WHERE RIGHT(users.email, 13) = 'lannister.com';
SQL;


