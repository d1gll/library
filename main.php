<?php
$title = "Личный кабинет";
$meta = "Личный кабинет";
$content = "Личный кабинет";

// шаблонизатор
$file = require_once('layout.php'); // путь к шаблону
$file=str_replace('{title}',$title,$file); // обьявляем из каких переменых брать информацию

?>
<?php if(!isset($_SESSION['logged_user'])){
    header('Location: index.php');
} ?>

<div class="form-row text-center">
    <div class="col-12">
        <h2>Личная страница</h2>

<div class="content_main-col">
    <div class="form-row text-center">
    <div class="h2 col-12">
    <?php if($_SESSION['logged_user']['age'] < 18):?>
    <div class="alert alert-info" role="alert">
        <blockquote class="blockquote">
        Реклама для тех, кто моложе 18 лет!!!
        </blockquote>
    </div>
    <?php elseif ($_SESSION['logged_user']['age'] > 50): ?>
    <div class="alert alert-info" role="alert">
        <blockquote class="blockquote">
        Реклама для тех, кто старше 50 лет!!!
        </blockquote>
    </div>
    </div>
    <?php endif; ?>
    </div>
        <table class="table">
            <thead>
            <tr>
                <th>Логин</th>
                <th>Email</th>
                <th>Возраст (лет)</th>
                <th>Номер карты</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php print_r( $_SESSION['logged_user']['username']);?></td>
                <td><?php print_r( $_SESSION['logged_user']['email']);?></td>
                <td><?php print_r( $_SESSION['logged_user']['age']);?></td>
                <td><?php print_r( $_SESSION['logged_user']['card']);?></td>
            </tr>
            </tbody>
        </table>
</div>
    </div>
</div>