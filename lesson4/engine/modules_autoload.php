<?php
$modules = array_splice(scandir(ENGINE_DIR), 2);

foreach ($modules as $file) {
    if ($file != "modules_autoload.php") {
        include_once ENGINE_DIR . $file;
    }
}