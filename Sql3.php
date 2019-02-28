<?php
id   login   salary   age   date   description


<?php
									IN

SELECT * FROM workers WHERE id IN(1, 2, 3, 5, 14);

SELECT * FROM workers WHERE login IN(1, 2, 3, 5, 14);

SELECT * FROM workers WHERE login IN(1, 2, 3, 5, 14) AND login IN("user", "admin", "ivan") AND salary > 300;

									BETWEEN

SELECT * FROM workers WHERE salary BETWEEN 100 AND 1000;

SELECT * FROM workers WHERE id BETWEEN 3 AND 10 AND salary BETWEEN 300 AND 500 ;

									AS

SELECT id as user_id, login as userlogin, salary as userSalary FROM workers;

									DISTINCT или DISTINCTROW в mySQL

SELECT DISTINCT salary FROM workers;

SELECT DISTINCT age FROM workers;

									MIN MAX

SELECT MIN(salary) as min FROM workers;

SELECT MAX(salary) as max FROM workers;

									SUM

SELECT SUM(salary) FROM workers;

SELECT SUM(salary) FROM workers WHERE age BETWEEN 21 AND 25;

SELECT SUM(salary) FROM workers WHERE id IN(1, 2, 3, 5);

									AVR

SELECT AVR(salary) FROM workers;

SELECT AVR(age) FROM workers;

									NOW, CURRENT_DATE, CURRENT_TIME

SELECT * FROM workers WHERE date > NOW();

INSERT INTO workers SET date NOW();

INSERT INTO workers ('name', 'date') VALUES ('Вася', NOW());

INSERT INTO workers ('name', 'date') VALUES ('Вася', CURDATE());

INSERT INTO workers ('name', 'date') VALUES ('Вася', CURTIME());

									SECOND, MINUTE, HOUR, DAY, MONTH

SELECT * FROM workers WHERE YEAR(date) = 2016;

SELECT * FROM workers WHERE MONTH(date) = 3;

SELECT * FROM workers WHERE DAY(date) = 3;

SELECT * FROM workers WHERE MONTH(date) = 4 AND DAY(date) = 5;

SELECT * FROM workers WHERE DAY(date) IN(1, 7, 11, 12, 15, 19, 21, 29);

SELECT * FROM workers WHERE DAYOFWEEK(date) = 3;

SELECT * FROM workers WHERE DAY(date) <= 10 AND YEAR(date) = 2016;

SELECT DAY(date) as day, MONTH(date) as month, YEAR(date) as year FROM workers;

SELECT WEEKDAY(NOW()) as today FROM workers;

									EXTRACT, DATE

SELECT EXTRACT(YEAR FROM date) as year,
EXTRACT(MOUNTH FROM date) as mounth,
EXTRACT(DAY FROM date) as day
FROM workers

SELECT DATE(date) FROM workers
SELECT DATE(date) FROM workers

									DATE_FORMAT

SELECT DATE_FORMAT(date, '%d.%m.%Y') FROM workers
SELECT DATE_FORMAT(date, '%y%% %m.%d') FROM workers

									INTERVAL, DATE_ADD, DATE_SUB

SELECT *, date + INTERVAL 1 DAY as new_date
SELECT *, DATE_ADD(date, 1 DAY) as new_date FROM workers

SELECT *, DATE_SUB(date, 1 DAY) as new_date FROM workers

SELECT *, DATE_ADD(date, INTERVAL "1:2" DAY_HOUR) FROM workers

SELECT *, DATE_ADD(date, INTERVAL "1-2" YEAR_MONTH) FROM workers

SELECT *, DATE_ADD(date, INTERVAK "1-2-3" DAY_MINUTE) FROM workers

SELECT *, DATE_ADD(date, INTERVAL "1-2-3-5" DAY_SECOND) FROM workers

SELECT DATE_ADD(date, INTERVAL "2-3-5" HOUR_SECOND) FROM workers

SELECT *, +INTERVAL 1 DAY -INTERVAL 2 HOUR FROM workers
SELECT DATE_ADD(date, INTERVAL 1 -2 -3 DAY_MINUTE) FROM workers

									МАТЕМАТИЧЕСКИЕ ФУНКЦИИ

SELECT 3 as res FROM workers

SELECT "eee" as res FROM workers

SELECT 3 as 3 FROM workers
SELECT 3 FROM workers

SELECT SUM(age) AND SUM(salary) AS res FROM workers

SELECT (salary - age) AS res FROM workers

SELECT (salary * age) AS res FROM workers

SELECT ((salary * age)/2) AS res FROM workers

SELECT ((MONTH(date) + DAY(date)) < 10) FROM workers

									LEFT RIGHT SUBSTRING

SELECT LEFT(description, 5) FROM workers

SELECT RIGHT(description, 5) FROM workers

SELECT SUBSTRING(description, 2, 10) FROM workers
SELECT SUBSTRING(description FROM 2 FOR 10) FROM workers

									UNION

SELECT id, name FROM workers UNION SELECT id, name FROM sub_ category

SELECT *, CONCAT(salary, age) as res FROM workers

SELECT *, CONCAT(salary, age, '!!!') as res FROM workers

SELECT *, CONCAT('-', salary, age) as res FROM workers

SELECT *, CONCAT(LEFT(login, 5), '...') as log FROM workers

									GROUP BY

SELECT MIN(salary) FROM workers GROUP BY age

SELECT MAX(age) FROM workers GROUP BY salary

									GROUP_CONCAT

SELECT DISTINCT age AS res (SELECT GROUP_CONCAT(id SEPARATOR '-')) FROM workers

									Подзапросы

SELECT * FROM workers WHERE salary > (SELECT AVG(salary) FRON workers)

SELECT * FROM workers WHERE age < (SELECT AVG(age)/2*3 FROM workers)

SELECT * FROM workers WHERE salary = (SELECT MIN(salary) FROM workers)

SELECT * FROM workers WHERE salary = (SELECT MAX(salary) FROM workers)

SELECT MAX(salary) AS max FROM workers WHERE age = 25

SELECT (SELECT (MAX(age) - MIN(age))/2 FROM workers) AS AVG

SELECT (SELECT (MAX(salary) - MIN(salary))/2 FROM workers) AS AVG FROM workers WHERE age = 25

 									JOIN

SELECT * FROM page LEFT JOIN category ON page.category_id = category_id

SELECT * FROM page LEFT JOIN category ON page.category_id = categori.id
LEFT JOIN sub_category ON category.id = subcategory.category_id

 									Работа над групировкой данных после суммирования вариантов

SELECT city.nameCity, count(user.id) AS cityUser FROM city RiGHT JOIN user ON city.id = user.city_id GROUP BY city.nameCity



$insert = "INSERT INTO cars SET first_name='Kiril', last_name='Markov', created_at=DATE('2017-10-20')";


?>