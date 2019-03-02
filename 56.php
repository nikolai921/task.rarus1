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
INSERT INTO friendship (user1_id, user2_id) VALUES ((SELECT id FROM users WHERE first_name = 'Tirion'), (SELECT id FROM users WHERE first_name = 'Jon')), ((SELECT id FROM users WHERE first_name = 'Jon'), (SELECT id FROM users WHERE first_name = 'Tirion'));
COMMIT;
SQL;
