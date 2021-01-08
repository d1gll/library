<?php

// Производим выход пользователя
unset($_SESSION['logged_user']);
session_destroy();

// Редирект на главную страницу
header('Location: index.php');
