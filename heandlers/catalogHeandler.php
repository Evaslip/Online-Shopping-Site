<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/db/connect.php');

    $id = $_GET['id'];
    $pag = ( isset($_GET['pag']) ) ? $_GET['pag'] : 1;
    $goodsOnPage = 2;

    $catalogInfo = [
        'items' => [],
        'pagination' => [
            'allBlocks' => 1,
            'currentActiveBlock' => $pag
        ]
    ];

    $lastGoodNumber = $pag *$goodsOnPage;
    $firstGoodNumber = ($pag - 1) * $goodsOnPage;
    // 1 --> 1-6
    // 2 --> 7-12
    // 3 --> 13-18


    $query = "SELECT * FROM `categories` WHERE `id` = $id";
    $result = mysqli_query($db, $query);

    $cat = mysqli_fetch_assoc($result)['parent_category'];

    sleep(1);

    // ищем дочерние категории
    if ($cat == 0) {
        $query = "SELECT * FROM `categories` WHERE `parent_category` = $id";
        $result = mysqli_query($db, $query);

        // записываем id категории в массив
        $children = [];
        while( $row = mysqli_fetch_assoc($result) ) {
            
            $children[] = $row['id'];

        }
        $cats = implode(',', $children);

        // ищем товары на основании найденных категорий
        $query = "SELECT * FROM `catalog` WHERE `category_id` IN ($cats)";
        $result = mysqli_query($db, $query);

        $rows = mysqli_num_rows($result);
        $pagBlocks = ceil($rows / $goodsOnPage);
        $catalogInfo['pagination']['allBlocks'] = $pagBlocks;



        // получение только нужных товаров
        $query = "SELECT * FROM `catalog` WHERE `category_id` IN ($cats) LIMIT {$firstGoodNumber}, {$goodsOnPage}";
        $result = mysqli_query($db, $query);

        // добавляем товары в массив $items
        // $items = [];
        while($row = mysqli_fetch_assoc($result) ) {
            $catalogInfo['items'][] = $row;
        }
        echo json_encode($catalogInfo);
    } else {
        // если категория не дочерняя 
        $query = "SELECT * FROM `catalog` WHERE `category_id` = $id";
        $result = mysqli_query($db, $query);

        $rows = mysqli_num_rows($result);
        echo $rows;
        
        $pagBlocks = ceil($rows / $goodsOnPage);
        echo $pagBlocks;
        $catalogInfo['pagination']['allBlocks'] = $pagBlocks;


        // получение только нужных товаров
        $query = "SELECT * FROM `catalog` WHERE `category_id` IN ($cats) LIMIT {$firstGoodNumber}, {$goodsOnPage}";
        $result = mysqli_query($db, $query);
        
        // добавляем товары в массив $items
        // $items = [];
        while($row = mysqli_fetch_assoc($result) ) {
            $catalogInfo['items'][] = $row;
        }
        echo json_encode($catalogInfo);
    }

    // JSON - javascript object notation
?>