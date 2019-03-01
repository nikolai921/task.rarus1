<?php

/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 17:00
 * Механизм дружбы в социальных сетях, обычно, реализуется через отдельную таблицу ссылающуюся на обоих пользователей.
 * Когда два человека начинают дружить, то в эту таблицу заносятся сразу две записи:
 */

$sql = <<<SQL
START TRANSACTION;
SELECT @A:=users.id FROM users WHERE first_name = 'Tirion';
INSERT INTO friendship SET user1_id=@A;
SELECT @B:=users.id FROM users WHERE first_name = 'Jon';
UPDATE friendship SET user2_id=@B;
COMMIT;
SQL;
