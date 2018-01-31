<?php /** @var $post Post */?>
<?php if ($post):?>
<div>
    <h1><?php echo $post->title ?></h1>

    <p><?php echo $post->author ?></p>
    <p><?php echo $post->text ?></p>
    
</div>
<?php else: ?>
    <div>
        <h1 id="title_post">404 ошибка</h1>
    </div>
<?php endif; ?>
<form method="post" action="?controller=Post&action=addCom">
        <label>
            Текст</br>
            <textarea id="real-comment" rows="6" cols="60" name="textComment"></textarea>
        </label> </br>
        <input type="hidden" name="post_id" value="<?php echo $post->id; ?>">
        <input type="submit" name="submit" value="Отправить">
    </form>
 
<script>
   var titlePost = document.getElementById('title_post');
   var newTitle = '';
   for (var i = titlePost.innerHTML.length - 1; i >= 0; i --) {
       newTitle = newTitle + titlePost.innerHTML[i];
   }
   titlePost.text = newTitle;
</script>
