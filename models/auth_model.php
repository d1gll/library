<?php
include ("../db/tables.php");

$data = $_POST;

if (isset($data['login']) || !empty($data['login']))
{
    $login = $data['login'];
}
else  exit ("Некорректный логин");

if (isset($data['password']) || !empty($data['password']))
{
    $password = $data['password'];
}

else  exit ("Некорректный пароль");


$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
//удаляем лишние пробелы
$login = trim($login);
$password = trim($password);
$errors = array();
$user = table::checkLogin($login);

if ($user)
    {
        if(password_verify($password, $user['password_hash'])) {
        $_SESSION['logged_user'] = $user;
        echo 'true';
    }
        else {

            echo 'Пароль неверно введен!';

        }

    }
else
    {
    echo 'Пользователь с таким логином не найден!';
    }

