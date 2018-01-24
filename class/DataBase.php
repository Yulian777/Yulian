<?php

class DataBase {

    public $isConn;
    protected $datab;
    
    //connect to bd
    public function __construct($username="root", $password="root", $host="localhost", $dbname="skillup") {
        
        $this->isConn = TRUE;
        try {
            $this->datab = new PDO ("mysql:dbname={$dbname};host={$host}",$username,$password);
            $this->datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->datab->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            throw new Exception($ex->getMessage());
        }
    }
    
    //disconnect to db
    public function disconnect() {
        $this->datab = NULL;
        $this->isConn = FALSE;
    }
    
    //get row
    public function getRow($queri, $params = []) {
        try {
            $stmt = $this->datab->prepare($queri);
            $stmt->execute($params);
            return $stmt->fetch();
        } catch (PDOException $ex) {
            throw new PDOException($ex->getMessage());
        }
    }
    
    //get rows
    public function getRows($queri, $params = []) {
        try {
            $stmt = $this->datab->prepare($queri);
            $stmt->execute($params);
            return $stmt->fetchAll();
        } catch (PDOException $ex) {
            throw new PDOException($ex->getMessage());
        }
    }
    
    public function insertRow($queri, $params = []) {
        
        return $this->methodsROw($queri, $params);
    }
    
    public function updateRow($queri, $params = []) {
        
        return $this->methodsROw($queri, $params);
    }
    
    public function deleteRow($queri, $params = []) {
        
        return $this->methodsROw($queri, $params);
    }
    
    public function methodsROw ($queri, $params = []) {
        try {
            $stmt = $this->datab->prepare($queri);
            $stmt->execute($params);
            return TRUE;
        } catch (PDOException $ex) {
            throw new PDOException($ex->getMessage());
        }
    }
           
}


