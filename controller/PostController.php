<?php

class PostController
{
    public static function addPostAction()
    {
       require_once '../model/Post.php';
       $post = new Post();
       $post->author = $_POST['author'];
       $post->title = $_POST['title'];
       $post->text = $_POST['text'];
       $post->tags = $_POST['tags'];
       Post::add($post);
    }
    
    public function postAction()
    {
        require_once '../model/Post.php';
        $post = Post::getPost(DB::getInstance(), $_GET['id']);
        
        return render('posts/post', [
            'post' => $post,
        ]);
    }
    
    public function addComAction()
    {
        require_once '../model/Comment.php';
        $comment = new Comment();
        $comment->post_id = $_POST['post_id'];
        $comment->data = time();
        $comment->text = $_POST['textComment'];
        $comment->user_id = $_SESSION['user_id'];
        Comment::addCom($comment);
    }
}

