<?php
function checkFile($path)
{
    //Проверка существует ли файл
    if (file_exists($path)) {
        return 'FileExists';
    }
    //Проверка на размер файла 
    if ($_FILES["myimg"]["size"] > 1024 * 1 * 1024) {
        return 'FileSize';
    }
    //Проверка расширения файла
    $blacklist = array(".php", ".phtml", ".php3", ".php4");
    foreach ($blacklist as $item) {
        if (preg_match("/$item\$/i", $_FILES['myimg']['name'])) {
            return 'PhpNotAllowed';
        }
    }
    // Проверка на тип файла
    $imageinfo = getimagesize($_FILES['myimg']['tmp_name']);
    if ($imageinfo['mime'] != 'image/gif' && $imageinfo['mime'] != 'image/jpeg') {
        return 'NotJpg';
    }
    if ($_FILES['myimg']['type'] != "image/jpeg") {
        return 'NotJpg';
    }

    return 'checkComplete';
}

function upload()
{
    $path = "img_dz3/big/" . $_FILES['myimg']['name'];
    if (checkFile($path) == 'checkComplete') {
        move_uploaded_file($_FILES['myimg']['tmp_name'], $path);
        uploadedImgToDb($path);
        $image = new SimpleImage();
        $image->load('img_dz3/big/' . $_FILES['myimg']['name']);
        $image->resizeToHeight(200);
        $image->save('img_dz3/small/' . $_FILES['myimg']['name']);
        return 1;
    } else {
        return checkFile($path);
    }
}
