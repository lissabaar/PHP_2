<?php

require_once '../../config/config.php';

$res = getDb_PG()->query("SELECT * FROM items LIMIT " . CATALOG_MIN_ITEMS . " OFFSET " . CATALOG_MIN_ITEMS);

$newItems = $res->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($newItems);