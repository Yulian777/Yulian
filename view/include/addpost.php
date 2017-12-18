<?php require 'header.php';?>

<div class="conteiner1">
    <image src="img/foto.png" alt="foto" id="foto"/>
    <p class="post"> Чтобы добавить фото, нажмите на кнопку нижу или просто перетащите ее сюда</p>
    <form action="file.php" method="get" class="addpost">
        <input type="submit" name="addfoto" value="Добавить фото" id="addfoto" >
    </form> 
</div>
<div class="avat">
    <image src="img/imgava/ava2" alt="avatar" class="avat"/>
</div>

<p class="user">Олег Прокопенко </p>

<div class="discription">
<form action="#" method="post">
    <textarea class="textarea" type="text" name="likes" maxlength="200" cols="60" rows="10" placeholder="Ваш комментарий..."></textarea>
</form>
</div>
<form action="#" method="post">
    <input type="submit" name="publish" value="Опубликовать" id="publish" />
</form> 
        
<?php require 'footer.php';       