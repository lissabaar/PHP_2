<?php

function checkLogin($login)
{
    $loginList = getAssocResult("SELECT `login` FROM `users`");
    foreach ($loginList as $key => $value) {
        if ($value['login'] == $login) return false;
    }
    return true;
}



function addUser($infoArr)
{
    $password = password_hash($infoArr['password'], PASSWORD_DEFAULT);
    $login = $infoArr['login'];
    $name = $infoArr['name'];
    $email = $infoArr['email'];
    $phone = $infoArr['phone'];
    executeQuery("INSERT INTO `users`(`login`, `password`, `name`, `phone`, `email`) VALUES ('{$login}', '{$password}', '{$name}', '{$phone}', '{$email}')");
}
