<?php

define('ROOT', dirname(__DIR__));

define('TEMPLATES_DIR', '../templates/');
define('LAYOUTS_DIR', '../templates/layouts/');
define('ENGINE_DIR', ROOT . '/engine/');

// DB CONFIG
define('HOST', 'localhost:3306');
define('USER', 'admin');
define('PASS', '12345');
define('DB', 'gb');

define('DB_DRIVER', 'pgsql');
define('HOST_PG', 'localhost');
define('PORT', '5433');
define('USER_PG', 'postgres');
define('PASS_PG', 'postgres');

define('CATALOG_MIN_ITEMS', 9);

require_once ENGINE_DIR . 'modules_autoload.php';
require_once ROOT . '/vendor/twig/twig/lib/Twig/Autoloader.php';

$messages = [
    '1' => 'Файл успешно загружен.',
    'errorFileExists' => 'Ошибка! Файл с таким именем уже существует, выберите другое имя файла!',
    'errorFileSize' => 'Размер файла не больше 1 мб!',
    'errorPhpNotAllowed' => 'Загрузка php-файлов запрещена!',
    'errorNotJpg' => 'Можно загружать только jpg-файлы!',
    'added' => 'Сообщение добавлено',
    'deleted' => 'Сообщение удалено',
    'edited' => 'Сообщение отредактировано',
    'ERROR' => 'Ошибка',
    'purchased' => 'Заказ сформирован.',
    'userExists' => 'Пользователь с таким логином уже существует. Пожалуйста, выберите другой логин.',
    'passNotMatch' => 'Пароли не совпадают, попробуйте еще раз.',
    'signed' => 'Регистрация прошла успешно.'
];
