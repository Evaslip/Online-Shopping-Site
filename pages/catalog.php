<?php

    include($_SERVER['DOCUMENT_ROOT'] . "/db/connect.php");
    include($_SERVER['DOCUMENT_ROOT'] . "/heandlers/chooseCategory.php");

    $title = 'Каталог товаров';
    include($_SERVER['DOCUMENT_ROOT'] . "/heandlers/head.php");
?>

<body>
    <div class="wrapper">
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/heandlers/header.php")?>
        <main>
        <div class="line"></div>
        <div class="links-navigation">
            <a href="#" class="links-navigation__item">Главная</a>
            <span class="links-navigation__item"> / </span>
            <a href="/pages/catalog.php?id=<?=$cat?>" class="links-navigation__item"><?=$cat_name?></a>
        </div>
        <section>
            <h1 class="title"><?=$cat_name?></h1>
            <div class="choose-text">Все товары</div>
            <div class="categories">
                <select name="cat_name" class="categories__items" id="cat_name">
                    <option class="categories__item" hidden>Категория</option>
                    <?php foreach($template['children'] as $key => $value): ?>
                    <option  value="<?=$value['id']?>"><?=$value['name']?></option>
                    <?php endforeach;?>
                </select>
                <select class="categories__items">
                    <option>Размер</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL" >XXL</option>
                </select>
                <select class="categories__items">
                    <option>Стоимость</option>
                    <option value="до 1000">до 1000</option>
                    <option value="1000-3000">1000-3000</option>
                    <option value="3000-6000">3000-6000</option>
                    <option value="6000-20000">6000-20000</option>
                </select>
            </div>
            <div class="goods"></div>
            <div class="goods-pages"></div>
        </section>
        </main>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/heandlers/footer.php")?>
    </div>
    <script src="../js/catalog.js"></script>
    <script src="../js/jquery-3.3.1.min.js"></script>
</body>
</html>