<?php
require 'header.php'; 
require __DIR__ . '/../../common/db.php';
require_once __DIR__ . '/../../common/functions.php';

if (empty($_POST['login']) || empty($_POST['password'])) {
   er($datat);
    }

if (isset($_POST['enter'])) {
    $stmt = $dbh -> prepare('SELECT id, login, password FROM users WHERE login = ?');
    $stmt -> execute([$_POST['login']]);
    $user = $stmt -> fetch(PDO::FETCH_ASSOC);

if ($user && $user['password'] === md5($_POST['password'])) {
        $_SESSION['user_id'] = $user['id']; 
    } else {
        echo 'Логин или пароль введен неверно.';
    }
  
}


//var_dump($_GET);
//var_dump($_SESSION);

?>
<section>
<div class="windenter">
    <p class="reg">Добро пожаловать</p>
    <form method="post" action="enter.php" >
        <input type="text" name="login" placeholder="Ваш логин" class="yemail">
        <input type="password" name="password" placeholder="Пароль" class="yemail">
        <input type="submit" name="enter" value="Войти" id="create">
    </form>
    <a href="#" class="already">Забыли пароль?</a>
</div>
</section>

<?php require 'footer.php';