<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 17:00
 * Составьте запрос, который извлекает все уникальные значения поля
 * house из таблицы users отсортированные по возрастанию
 */

$query = "SELECT DISTINCT house FROM users ORDER BY house ASC";