<?php

class User {
    protected $table = 'users';


    private $_id;
    private $_username;
    private $_password;
    
    public function getId() {
        if ($_id === TRUE) {
        return $this->_id;
        } else {
            Echo 'Вы не авторизованы!';
        }
    }
    
    public function setId($id) {
        $this->_id = $id;
    }
    
    public function getUsername() {
        return $this->_username;
    }
    
    public function setUsername($username) {
        $this->_username = $username;
    }
    
    public function getPassword() {
        return $this->_password;
    }
    
    public function setPassword($password) {
        $this->_password = $password;
    }
    
}

