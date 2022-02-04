<?php
session_start();

function isAuth()
{
    if (isset($_SESSION['login'])) return true;
    if (isset($_COOKIE['hash'])) {
        $hash = $_COOKIE['hash'];
        $sql = "SELECT * FROM `users` WHERE `hash` = '{$hash}'";
        $row = getDataFromDb($sql);
        $user = $row['login'];
        if (!empty($user)) {
            $_SESSION['login'] = $user;
            return true;
        }
    }
    return false;
}

function getUsername()
{
    return isAuth() ? $_SESSION['login'] : "Гость";
}

function auth($login, $password)
{
    $login = mysqli_real_escape_string(getDb(), strip_tags(stripslashes($login)));
    $row = getDataFromDb("SELECT * FROM `users` WHERE `login` = '{$login}'");
    if (!$row) return false;
    if (password_verify($password, $row['password'])) {
        $_SESSION['login'] = $login;
        $_SESSION['id'] = $row['id'];
        return true;
    }
    return false;
}

function isAdmin()
{
    return $_SESSION['login'] == 'admin';
}
