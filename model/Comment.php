<?php

class Comment
{
    public $post_id;
    public $data;
    public $text;
    public $user_id;

    public static function addCom(Comment $comment)
    {
        $pdo = DB::getInstance()->getPdo();
        $stmt = $pdo->prepare('INSERT INTO comment (post_id, data, text, user_id) VALUE (?,?,?,?)');
        $stmt->execute([
            $comment->post_id,
            $comment->data,
            $comment->text,
            $comment->user_id,
        ]);
    }
}

