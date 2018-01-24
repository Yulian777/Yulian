<?php

class Posts {
    
    private $link;
    
    public function __construct() {
        $this->connect();
    }
    
    public function connect() {
        $user = 'root';
        $password = '';
        $dsn = 'mysql:dbname=skillogram;host=127.0.0.1';
        
        $this->link = new PDO($dsn,$user,$password);
        return $this;
    }
    
    public function addPost($sql) {
        
        $add = $this->link->prepare($sql);
        
        return $add->execute();
        
        
    }
}

$post = new Posts();

$post->addPost();