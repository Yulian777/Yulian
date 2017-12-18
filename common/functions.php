<?php

function addMessage($text){
    $_SESSION['message'] = $text;
}
function getMessenge(){
    $text = $_SESSION['message'];
    unset($_SESSION['message']);
    return 'Вход в приложение';
}

function getView($name){
    if($name && file_exists(VIEW_PATH . $name.'.php')) {
    return $name;
 }else{ 
    return '404';
 
 }
}

function render($path, $data =[]){
    extract($data);
    ob_start();
    require $path;
    return ob_get_clean();
}


function dbconnect($db){
    $dsn = 'mysql:dbname=skillogram;host=127.0.0.1';
$user = 'root';
$password = '';

$dbh = new PDO($dsn, $user, $password);
}
 function er($datat){
   $_SESSION['errors'] ='Заполните все поля';
   echo $_SESSION['errors'];
 }