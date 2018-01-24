<?php

include_once 'CustomException.php';

try {
    $dsn = 'mysql:dbname=skillup;host=127.0.0.1';
    $user = 'root';
    $password = 'root';

    $dbh = new PDO($dsn, $user, $password);
} catch (Exception $e) {
    echo 'Не получилось подключится к БД';
}

try {
    $title = $_GET['title'];
    if (strlen($title) > 10) {
        throw new CustomException('Заголовок поста слишком длинный', 4);
    }
} catch (CustomException $e) {
    echo 'Ошибка' . $e->getMessage();
} catch (Exception $e) {
    echo 'Общая ошибка:' . $e->getMessage();
}

