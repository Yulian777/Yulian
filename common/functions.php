<?php

function addMessage($text) {
    $_SESSION['message'] = $text;
}

function getMessage() {
    $text = $_SESSION['message'];
    unset($_SESSION['message']);
    return $text;
}

function getView($name) {
    if ($name && file_exists(VIEW_PATH . $name.'.php')) {
    return $name;
 } else { 
    return '404';
 
    }
}

function render($path, $data = []) {
    extract($data);
    ob_start();
    require VIEW_PATH . $path . '.php';
    return ob_get_clean();
}

function t($a) {

    echo "<pre>";
    print_r($a);
    echo "<pre>";
}

