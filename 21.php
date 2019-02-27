<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.02.19
 * Time: 9:59
 * Реализуйте функцию getComposerFileData, которая возвращет ассоциативный массив,
 * соответствующий json из файла composer.json в этом упражнении.
 */

$json = '{
    "name": "dosjein/vkdeepmine",
    "description": "DeepMine service for Vkontakti",
    "license": "top-secret",
    "authors": [
        {
            "name": "John Dosje",
            "email": "dosjein@gmail.com"
        }
    ],
    "minimum-stability": "dev",
    "require": {
        "vlucas/phpdotenv": "~1.",
        "erusev/parsedown": "^1.6",
        "getjump/vk": "*",
        "guzzlehttp/guzzle": "*"
    }
}';

function getComposerFileData($string)
{
    if (!empty($string)) {
        return json_decode($string, true);
    }

}

print_r(getComposerFileData($json));