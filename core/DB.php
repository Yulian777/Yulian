<?php

class DB {
    
    private static $instance = null;
    private $pdo;
    
    public function __construct() 
    {
        $user = 'root';
        $password = '';
        $dsn = 'mysql:dbname=skillup;host=127.0.0.1';

        $this->pdo = new PDO($dsn,$user,$password);
    }
    
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * @return PDO
     */
    public function getPdo()
    {
        return $this->pdo;
    }
}
