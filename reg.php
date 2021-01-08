<?php
$title = "Регистрация";
$meta = "Регистрация";
$content = "Регистрация";


$file = require_once('layout.php'); // путь к шаблону
$file=str_replace('{title}',$title,$file); // обьявляем из каких переменых брать информацию

?>
<?php if(isset($_SESSION['logged_user'])){
    header('Location: index.php');
} ?>
<html>

<div class="form-row text-center">
    <div class="col-12">
        <h2>Регистрация</h2>

        <body>
        <form method="POST" id="formx" action="javascript:void(null);" onsubmit="call()">
            <p>
                <label>Ваш логин:<br></label>
                <input required name="login" type="text" size="20" maxlength="15">
            </p>
            <p>
                <label>Ваша почта:<br></label>
                <input required name="email" type="email" size="20" maxlength="20">
            </p>
            <p>
                <label>Ваш пароль:<br></label>
                <input required name="password" type="password" size="20" maxlength="15">
            </p>
            <p>
                <label>Ваш возраст (лет):<br></label>
                <input required name="age" type="number" size="20" maxlength="2">
            </p>
            <p>
                <label>Номер карты<br></label>
                <input required name="card" type="number" size="20" maxlength="19" minlength="19">
            </p>
            <p>
                <label>Пароль от карты<br></label>
                <input required name="pin" type="password" size="20" maxlength="3">
            </p>
            <p>

                <input type="submit" name="submit" class="button" id="submit_btn" value="Регистрация" />
            </p>
        </form>
        <div class="alert alert-warning" id="results" role="alert">
        </div>
    </div>
</div>
        </body>
        </html>



