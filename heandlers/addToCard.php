<?php

if(!isset($_GET['id'])) {
    die();
}

session_start();

if(isset($_SESSION['cartCount'])) {
    $_SESSION['cartCount']++;
} else {
    $_SESSION['cartCount'] = 1;
}


$cartItem =  [
    'id' => $_GET['id'],
    'count' => 1
];

if(!isset($_SESSION['cart'])) {
    $_SESSION['cart']= [];
    array_push($_SESSION['cart'], $cartItem);
} else {
    $goal = false;

    // проверяем на наличие товара в массиве

    foreach($_SESSION['cart'] as $key => $value) {
        if ($_GET['id'] == $value['id']) {
            $_SESSION['cart'][$key]['count']++;
            $goal = true;
            break;
        }
    }

    if ($goal == false) {
        array_push($_SESSION['cart'], $cartItem);
    }
    
}

// $id = 3;

print_r($_SESSION['cartCount']);
echo '<br>';
echo '<pre>';
print_r($_SESSION['cart']);
echo '</pre>';


// $_SESSION['cartCount']++;


// $_SESSION = [
//     'cart' => [
//         0 => [
//         'id' => 2,
//         'count' => 1
//         ],
//         1=> [
//         'id' => 2,
//         'count' => 1
//         ]
//     ],
//     'cartCount' => 0
// ];
// session_destroy();
?>