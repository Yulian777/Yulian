<!--<form action="?controller=User&action=regData" method="post">
    <p> Имя:<input type="text" name="name"></p>
    <p> Логин:<input type="text" name="login"></p>
    <p> Пароль:<input type="text" name="password"></p>
    <p> <input type="submit" value="Зарегистрироваться" ></p>
</form>-->

<section>
<div class="windregistre">
    <p class="reg">Регистрация</p>
    <form method="post" action="?controller=User&action=regData" type="new" >
        <p>
            <input type="text" name="login" placeholder="Придумайте логин" value="<?php echo @$_POST['login'] ?>" class="yemail">
        </p>
        <p>
            <input type="text" name="name" placeholder="ФИО" value="<?php echo @$_POST['name'] ?>" class="yemail">
        </p>
        <p>
            <input type="password" name="password" placeholder="Придумайте пароль" class="yemail" value="<?php echo @$_POST['passsword'] ?>">
        </p>
        <p>
        <input type="password" name="password2" placeholder="Введите пароль еще раз" class="yemail">
        </p>
        <p>
        <input type="submit" name="add" value="Зарегистрироваться" id="create">
        </p>
    </form>
    <a href="#" class="already">Уже зарегистрировались?</a>
</div>
</section>