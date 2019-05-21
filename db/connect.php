<?php
    $db = mysqli_connect('localhost', 'root', '', 'shop_borodin');
    mysqli_set_charset($db, 'utf8');

    if ( !$db ) {
        echo 'Не удалось подключиться к Базе Данных. =(';
        die();
    }
?>