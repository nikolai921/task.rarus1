<?php


error_reporting(E_ALL);
ini_set('display_errors', 'on');

//Устанавливаем доступы к базе данных:
$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = ''; //пароль, по умолчанию пустой
$db_name = 'dicisionSQL'; //имя базы данных


//Соединяемся с базой данных используя наши доступы:
$link = mysqli_connect($host, $user, $password, $db_name);

//Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
mysqli_query($link, "SET NAMES 'utf8'");

$query = "
SELECT family_ties.nameUser as Parents, brothers.nameUser as brothers, sisters.nameUser as sister
FROM family_ties
LEFT JOIN family_ties as brothers ON family_ties.id = brothers.father_id
LEFT JOIN family_ties as sisters ON family_ties.id = sisters.mother_id
-- LEFT JOIN family_ties as mother ON family_ties.id = mother.mother_id
WHERE brothers.father_id = 3 or sisters.mother_id = 2
-- and grandchildren.sex = 'm'
-- LEFT JOIN  ON
-- GROUP BY brothers.father_id
-- HAVING brothers.father_id = 3
-- LEFT JOIN category ON category.id = page.category_id
-- WHERE post.status = 0


-- WHERE  game.status = 'expectd'
-- GROUP BY MONTH(game.data)
-- HAVING MONTH(game.data) = 1
-- WHERE product.date
-- BETWEEN 2019-01-01 and 2019-01-31
SELECT *
FROM post
INNER JOIN ((
	SELECT id
	FROM post WHERE id < 1
	ORDER BY id LIMIT 1 DESC)
		UNION (
		SELECT id
		FROM post WHERE id > 1
		ORDER BY id LIMIT 1 ASC)) sub_post
ON post.id IN (sub_post.id)

";

$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) {
    ;
}

print_r($data);

// $query = "SELECT *, user.nameUser,  sons.nameUser as sons FROM user LEFT JOIN user As sons ON user.son_id = sons.id";

// $result = mysqli_query($link, $query) or die(mysqli_error($link));

// for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

// print_r($data);

$query = "SELECT *, user.nameUser as garentFather,  garentfather.nameUser as User 
FROM user 
LEFT JOIN user As father 
	ON user.son_id = father.id 
LEFT JOIN user As grandfather 
	ON father.son_id = grandfather.id 
LEFT JOIN user As garentfather 
	ON grandfather.son_id = garentfather.id";

// $query = "SELECT *, user.nameUser as garentFather,  garentfather.nameUser as User FROM user LEFT JOIN user As father ON user.son_id = father.id LEFT JOIN user As grandfather ON father.son_id = grandfather.id LEFT JOIN user As garentfather ON grandfather.son_id = garentfather.id";

// $query = "SELECT user.id, user.nameUser,  user.id as grandfather_id,  user.nameUser as nameGrandfather, user.id as father_id FROM user as father INNER JOIN user ON user.id = father.father_id INNER JOIN user as grandfather ON user.id = grandfather.grandfather_id";

// INNER JOIN (SELECT father.father_id as grandfather_id, father.nameFather as nameGrandfather FROM father) as grandfather ON father.father_id = grandfather.grandfather_id

// $query = "SELECT user.id, user.nameUser, father.nameFather FROM user INNER JOIN (SELECT user.son_id as father_id, user.nameUser as nameFather FROM user) as father ON user.id = father.father_id INNER JOIN (SELECT father.father_id as grandfather_id, father.nameFather as nameGrandfather FROM father) as grandfather ON father.father_id = grandfather.grandfather_id";

Вывести из одной таблицы отцов каждого юзера
$query = "SELECT user.id, user.nameUser, sons.nameFather 
FROM user 
INNER JOIN (SELECT user.son_id as sons_id, user.nameUser as nameFather FROM user) as sons 
ON user.id = sons.sons_id";

Задача подсчета через GROUP BY
$query = "SELECT city.nameCity, count(user.id) AS cityUser 
FROM city 
RiGHT JOIN user 
ON city.id = user.city_id 
WHERE count(user.id) > 1 
GROUP BY city.nameCity";

HAVIN реализация за счет данной функции
$query = "
SELECT product.nameProduct as product, count(orders.product_id) as count
FROM product
RIGHT JOIN orders ON product.product_id = orders.product_id
-- WHERE count(orders.product_id) > 1
GROUP BY product.nameProduct
HAVING count(orders.product_id) > 1
";

GROUP BY MONTH(product . date) основновное решение
$query = "
SELECT product.date, SUM(product.price) as coast
FROM product
LEFT JOIN purchase ON purchase.product_id = product.product_id
-- LEFT JOIN users ON users.id = purchase.users_id
-- WHERE  interests.id = 1
GROUP BY MONTH(product.date)
HAVING MONTH(product.date) = 1
-- WHERE product.date
-- BETWEEN 2019-01-01 and 2019-01-31
";

$query = "
SELECT product.date, SUM(product.price) as coast
FROM product
LEFT JOIN purchase ON purchase.product_id = product.product_id
-- LEFT JOIN users ON users.id = purchase.users_id
-- WHERE  interests.id = 1
GROUP BY MONTH(product.date)
";




