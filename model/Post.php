<?php

class Post {

    public $id;
    public $author;
    public $title;
    public $text;
    public $likes;
    public $tags;

    public static function add(Post $post)
    {
        $pdo = DB::getInstance()->getPdo();
        $stmt = $pdo->prepare('INSERT INTO post (author, title, text, tags) VALUE (?,?,?,?)');
        $stmt->execute([
            $post->author,
            $post->title,
            $post->text,
            $post->tags,
        ]);
    }

    public static function getPost(DB $db, $id) 
    {
        $stmt = $db->getPdo()->prepare('SELECT id, title, author, text FROM post WHERE id = ?');
        $stmt->execute([$id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            return null;
        }
        $post = new Post();
        $post->id = $row['id'];
        $post->title = $row['title'];
        $post->author = $row['author'];
        $post->text = $row['text'];
        return $post;
    }
}