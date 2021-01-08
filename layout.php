<div lang="ru">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <head>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="//code.jquery.com/jquery-latest.js"></script>
        <script src="js/ajax_reg.js"></script>
        <script src="js/ajax_login.js"></script>
    </head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Главная страница</a>
        </li>
        <?php if(isset($_SESSION['logged_user'])) : ?>
            <li class="nav-item">
                <a class="nav-link" href="main.php">Личный кабинет</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Выход (<?php echo $_SESSION['logged_user']['username']; ?>)</a>
            </li>
        <?php else : ?>
            <li class="nav-item">
                <a class="nav-link" href="reg.php">Регистрация</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Авторизация</a>
            </li>
        <?php endif; ?>
    </ul>

</nav>
</body>

