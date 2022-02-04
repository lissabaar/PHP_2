<?php
function getDb()
{
    static $db = null;
    if (is_null($db)) {
        $db = mysqli_connect(HOST, USER, PASS, DB) or die("Could not connect. " . mysqli_connect_error());
    }
    return $db;
}
function getDb_PG()
{
    $connect_str = DB_DRIVER . ':host=' . HOST_PG . ";port=" . PORT . ';dbname=' . DB;
    $db = new PDO($connect_str, USER_PG, PASS_PG);
    return $db;
}

function getAssocResult($sql)
{
    $result = mysqli_query(getDb(), $sql) or die(mysqli_connect_error());
    $array_result = [];
    while ($row = $result->fetch_assoc())
        $array_result[] = $row;
    return $array_result;
}

function getAssocResult_PG($sql)
{
    $res = getDb_PG()->query($sql);
    $array_result = $res->fetchAll(PDO::FETCH_ASSOC);
    return $array_result;
}

function getDataFromDb($sql)
{
    $result = mysqli_query(getDb(), $sql) or die(mysqli_connect_error());
    return $result->fetch_assoc();
}

function executeQuery($sql)
{
    mysqli_query(getDb(), $sql) or die(mysqli_error(getDb()));
}

function uploadedImgToDb($path)
{
    $basename = basename(ROOT . '/public/' . $path);
    $filename = filesize(ROOT . '/public/' . $path);
    $url = $_SERVER['SERVER_NAME'] . '/' . $path;
    executeQuery("INSERT INTO `gallery`(`url`, `name`, `size`) VALUES ('$url','$basename','$filename')");
}
