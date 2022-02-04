<?php
// скрипт для загрузки инфо об изображениях из папки в БД
// localhost/dirToDbScript.php - ссылка для запуска скрипта

include '../config/config.php';

$id = 1;
foreach (array_splice(scandir('img_dz3/big'), 2) as $key => $image_name) {
    $URL = $_SERVER['SERVER_NAME'] . "/img_dz3/big/" . $image_name;
    $basename = $image_name;
    $filesize = filesize($_SERVER['DOCUMENT_ROOT'] . '/img_dz3/big/' . $image_name);
    var_dump(mysqli_query(getDb(), "INSERT INTO `gallery`(`id`, `url`, `name`, `size`) VALUES ('$id','$URL','$basename','$filesize')"));
    $id++;
}
