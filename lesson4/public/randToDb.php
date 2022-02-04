<?php
require_once '../config/config.php';

$db = getDb_PG();

$n = 0;
while ($n < 150) {
    $name = rand();
    $price = rand();
    $description = rand();
    $rows = $db->exec("INSERT INTO items
(name, price, description, image)
VALUES ($name, $price, $description, '/img/catalog/flower-yellow.png')");
    $n++;
}