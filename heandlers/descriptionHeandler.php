<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/db/connect.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/db/func.php');

    $id = $_GET['id'];
    // $id = 1;

    //d($id);
    // echo $id;
    $query = "SELECT * FROM `catalog` WHERE `id` = $id";
    $result = mysqli_query($db, $query);

    $cat = mysqli_fetch_assoc($result);
    echo json_encode($cat);
    //sleep(3);

    // ищем дочерние категории
    // if ($cat == 0) {
    //     $query = "SELECT * FROM `categories` WHERE `parent_category` = $id";
    //     $result = mysqli_query($db, $query);

    //     // записываем id категории в массив
    //     $children = [];
    //     while( $row = mysqli_fetch_assoc($result) ) {
            
    //         $children[] = $row['id'];

    //     }
    //     $cats = implode(',', $children);

    //     // ищем товары на основании найденных категорий
    //     $query = "SELECT * FROM `catalog` WHERE `category_id` IN ($cats)";
    //     $result = mysqli_query($db, $query);

    //     // добавляем товары в массив $items
    //     $items = [];
    //     while($row = mysqli_fetch_assoc($result) ) {
    //         $items[] = $row;
    //     }
    //     echo json_encode($items);
    // } else {
    //     // если категория не дочерняя 
    //     $query = "SELECT * FROM `catalog` WHERE `category_id` = $id";
    //     $result = mysqli_query($db, $query);

    //     // добавляем товары в массив $items
    //     $items = [];
    //     while($row = mysqli_fetch_assoc($result) ) {
    //         $items[] = $row;
    //     }
    //     echo json_encode($items);
    // }


?>