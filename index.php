<?php
$db = mysqli_connect('localhost', 'root', '', 'shop_borodin');
mysqli_set_charset($db, 'utf8');

$userQuery = "INSERT INTO `emails` (`email`) VALUES ('{$_GET['email']}');";

$userResult = mysqli_query($db, $userQuery);
if ( $userResult ) {
    $userId = mysqli_insert_id($db);
} else {
    echo 'Не удалось сохранить данные. Попробуйте позже.';
    $userId = false;
}

?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/dest/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>SH - Главная</title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__flex">
            <a href="index.php" class="logo logo_margin-right"></a>
            <nav class="navigation">
                <a href="/pages/catalog.php?id=1" class="navigation__item">Мужчинам</a>
                <a href="/pages/catalog.php?id=2" class="navigation__item">Женщинам</a>
                <a href="/pages/catalog.php?id=3" class="navigation__item">Детям</a>
                <a href="#" class="navigation__item">Новинки</a>
                <a href="#" class="navigation__item">О нас</a>
            </nav>
            </div>
            <div class="header__flex">
            <div class="icon-text">
                <div class="icon-text__icon icon-text__icon_photo"></div>
                <div class="icon-text__text">Привет, Пользователь (<a class="main-link main-link_orange" href="#">выйти</a>)</div>
            </div>
            <div class="icon-text">
                <div class="icon-text__icon icon-text__icon_basket"></div>
                <div class="icon-text__text">Корзина (5)</div>
            </div>
            </div>
        </header>
</body>
<main>
    <div class="main-text">
        <h1 class="main-text-title">НОВЫЕ ПОСТУПЛЕНИЯ ВЕСНЫ</h1>
        <h3 class="main-text-cursive">Мы подготовили для Вас лучшие новинки сезона</h3>
        <a href="#НОВИНКИ" class="main-text_button">Посмотреть новинки</a>
    </div>

<div class="main-blocks">
    <div class="main-blocks_items">
        <div class="main-blocks_items-jeans">
            <div class="main-blocks_items_inside">
            <p class="main-blocks_items_text">Джинсовые куртки</p>
            <p class="main-blocks_items_text_c">New arrival</p>
            </div>
        </div>
        <div class="main-blocks_items-acc"></div>
    </div>
        <div class="main-blocks_items">
            <div class="main-blocks_items-jeans_text">
            <div class="main-blocks_items_inside">
                <div class="main-blocks_items-jeans_img"></div>
                <p class="main-blocks_items_text_c">Каждый сезон мы<br> подготавливаем для Вас<br> исключительно лучшую<br>
            модную одежду. Следите <br> за нашими новинками</p>
            </div>
            </div>
            <div class="main-blocks_items-jeans_choose">
            <div class="main-blocks_items_inside">
            <p class="main-blocks_items_text">Джинсы</p>
            <p class="main-blocks_items_text_c">от 3000 руб</p>
            </div>
            </div>
            <div class="main-blocks_items-acc_text">
                <div class="main-blocks_items_inside">
                <div class="main-blocks_items-boots_img"></div>
                <p class="main-blocks_items_text">Аксессуары</p>
                </div>
            </div>
        </div>
        <div class="main-blocks_items">
        <div class="main-blocks_items-boots"></div>
        <div class="main-blocks_items-child_text">
            <div class="main-blocks_items_inside">
            <div class="main-blocks_items-jeans_img"></div>
                <p class="main-blocks_items_text_c">Самые низкие цены в<br>Москве<br>Нашли дешевле? Вернем <br> разницу</p>
            </div>
        </div>
        <div class="main-blocks_items-sport">
        <div class="main-blocks_items_inside">
            <p class="main-blocks_items_text spo">Спортивная <br>Одежда </p>
            <p class="main-blocks_items_text_c spo">от 590 руб</p>
            </div>
        </div>
        </div>
        <div class="main-blocks_items">
            <div class="main-blocks_items-boots_text">
            <div class="main-blocks_items_inside">
                <div class="main-blocks_items-boots_img"></div>
                <p class="main-blocks_items_text">Элегантная <br> Обувь</p>
                <p class="main-blocks_items_text_c"> Ботинки, Кроссовки</p>
            </div>
            </div>
            <div class="main-blocks_items-child">
            <div class="main-blocks_items_inside">
            <p class="main-blocks_items_text">Детская <br> одежда</p>
            <p class="main-blocks_items_text_c">New arrival</p>
            </div>
            </div>
        </div>  
    </div>
    <div class="main-commercial">
        <h2 class="main-commercial_main">Будь всегда в курсе выгодных предложений</h2>
        <h3 class="main-commercial_cursive">Подписывайтесь и мы сообщим вам о новых предложениях</h3>
    </div>
    <div class="main-form">
    <form method="GET" action="">
    <div class="main-form_style">
    <input type="email" name="email" placeholder="e-mail">
    <input class="main-form_button" type="submit" value="Отправить">
    </div>
    </form>
    </div>
    <div class="main-form_validation">
    <p class="main-form_success">Вы успешно подписались!</p>
    <p class="main-form_fail">Вы не ввели email</p>
    </div>
</main>
<footer class="footer">
            <div class="footer-items">
                <h3 class="footer-items__h3">Коллекции</h3>
                <a href="#" class="footer-items__links">Женщинам (1725)</a>
                <a href="#" class="footer-items__links">Мужчинам (635)</a>
                <a href="#" class="footer-items__links">Детям (2514)</a>
                <a href="#" class="footer-items__links">Новинки (76)</a>
            </div>
            <div class="footer-items">
                <h3 class="footer-items__h3">Магазин</h3>
                <a href="#" class="footer-items__links footer-items__links_center">О нас</a>
                <a href="#" class="footer-items__links footer-items__links_center">Доставка</a>
                <a href="#" class="footer-items__links footer-items__links_center">Работай с нами</a>
                <a href="#" class="footer-items__links footer-items__links_center">Контакты</a>
            </div>
            <div class="footer-items footer-items_no-border">
                <h3 class="footer-items__h3">Мы в социальных сетях</h3>
                <span href="#" class="footer-items__links">Сайт разработан в inordic.ru</span>
                <span href="#" class="footer-items__links">2018 Все права защищены</span>
                <div class="social">
                    <div class="social__item"></div>
                    <div class="social__item"></div>
                    <div class="social__item"></div>
                </div>
            </div>
        </footer>
<script src="../js/catalog.js"></script>
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/main.js"></script>
</html>