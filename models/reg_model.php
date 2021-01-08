<?php

include ("../db/tables.php");


if (isset($_POST['login']) || !empty($_POST['login']))
    {
        $login = $_POST['login'];
    }
else  exit ("Некорректный логин");

if (isset($_POST['email']) || !empty($_POST['email']))
{
    $email = $_POST['email'];
}
else  exit ("Некорректная почта");

if (isset($_POST['password']) || !empty($_POST['password']))
{
    $password = $_POST['password'];
}
else  exit ("Некорректный пароль");

if (isset($_POST['age']) || !empty($_POST['age']))
{
    $age = $_POST['age'];
}
else  exit ("Некорректный возраст");

if (isset($_POST['card']) || !empty($_POST['card']))
{
    $card = $_POST['card'];
}
else  exit ("Некорректный номер карты");

if (isset($_POST['pin']) || !empty($_POST['pin']))
{
    $pin = $_POST['pin'];
}
else  exit ("Некорректный пароль от карты");
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
//удаляем лишние пробелы
$login = trim($login);
$password = trim($password);

$add = table::addUser($login, $email, $password, $age, $card, $pin);

if ($add == "0")
{
    echo "true";
}
elseif ($add == "1")
{
    echo "При создании пользователя произошла ошибка. Попытайтесь позже.";
}
elseif ($add == "2")
{
    echo "Ошибка! Логин уже занят";
}
else {
    echo "Ошибка! Введите корректные данные";
}
?>