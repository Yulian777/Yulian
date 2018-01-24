<?php 
 
require_once __DIR__ . '/../../common/functions.php';

dbconnect($db);

if (isset($_POST['add'])) {
    // Регистрируем
    $errors = [];
    if (empty($_POST['login']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['password2'])) {
        $errors[] = 'Заполните все поля';
    }
    
    if ($_POST['password'] != $_POST['password2']) {
        $errors[] = 'Повторный пароль введён не верно';
    }
    
    if (empty($errors)) {
        $salt = 'jd4H2D4eql98tunx65n7ZjK';
        
        $stmt = $dbh -> prepare('INSERT INTO users (login, password, email) VALUES (:login, :password, :email)');
        $stmt -> execute([
            ':login' => $_POST['login'],
            ':password' => md5($_POST['password'] . $salt),
            ':name' => $_POST['email'],
        ]);

        header('Location: ./');
        exit;
    } else {
        foreach ($errors as $error) {
            echo '<div style="color: red;">' . $error . '</div>'.'<hr>';
        }
    }
}

require 'header.php';

var_dump($_GET);
?>

<section>
<div class="windregistre">
    <p class="reg">Регистрация</p>
    <form method="post" action="registr.php" type="new" >
        <p>
            <input type="text" name="login" placeholder="Придумайте логин" value="<?php echo @$_POST['login'] ?>" class="yemail">
        </p>
        <p>
            <input type="email" name="email" placeholder="Ваш email" value="<?php echo @$_POST['email'] ?>" class="yemail">
        </p>
        <p>
            <input type="password" name="password" placeholder="Придумайте пароль" class="yemail" value="<?php echo @$_POST['passsword'] ?>">
        </p>
        <p>
        <input type="password" name="password2" placeholder="Введите пароль еще раз" class="yemail">
        </p>
        <p>
        <input type="submit" name="add" value="Создать аккаунт" id="create">
        </p>
    </form>
    <a href="enter.php" class="already">Уже зарегистрировались?</a>
</div>
</section>

<?php require 'footer.php';
