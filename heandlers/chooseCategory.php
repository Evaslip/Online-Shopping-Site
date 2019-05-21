<?php
    //получение id
    if ( isset($_GET['id']) ) {
        $cat = $_GET['id'];
    } else {
        $cat = 1;
    }

    // выбор родительских категорий
    $query = "SELECT * FROM `categories` WHERE `parent_category` = 0";
    $result = mysqli_query($db, $query);
    $template = [];

    while($row = mysqli_fetch_assoc($result) ) {
        $template['cats'][] = $row;
    }

    // выбор дочерних категорий
    $query = "SELECT * FROM `categories` WHERE `parent_category` = $cat";
    $result = mysqli_query($db, $query);

    while($row = mysqli_fetch_assoc($result) ) {
        $template['children'][] = $row;
    }

    $cat_name = '';

    foreach($template['cats'] as $key => $value) {
        if ($cat == $value['id']) {
            $cat_name = $value['name'];
        }
    }
?>