<?php
$title = "Авторизация";
$meta = "Авторизация";
$content = "Авторизация";

$file = require_once('layout.php'); // путь к шаблону
$file=str_replace('{title}',$title,$file); // обьявляем из каких переменых брать информацию
?>
<?php if(isset($_SESSION['logged_user'])){
    header('Location: index.php');
} ?>
<html>

<div class="form-row text-center">
    <div class="col-12">
        <h2>Авторизация</h2>

<body>
<form method="POST" id="formL" action="javascript:void(null);" onsubmit="callLogin()">
    <p>
        <label>Ваш логин:<br></label>
        <input required name="login" type="text" size="15" maxlength="15">
    </p>
    <p>
        <label>Ваш пароль:<br></label>
        <input required name="password" type="password" size="15" maxlength="15">
    </p>
    <p>
        <input type="submit" name="submit" value="Вход">
    </p></form>
<div class="alert alert-warning" id="results_login" role="alert">
</div>
    </div>
</div>
</body>
</html>

