<?php 
    include($_SERVER['DOCUMENT_ROOT'] . "/db/connect.php");
    include($_SERVER['DOCUMENT_ROOT'] . "/heandlers/chooseCategory.php");
    
    $title = 'Корзина';
    include($_SERVER['DOCUMENT_ROOT'] . "/heandlers/head.php");
?>
<body>
    <div class="wrapper">
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/heandlers/header.php")?>

    <!-- Перечень заказанного товара -->

    <main>
        <div class="line line_indent"></div>
        <section>
            <div class="margin-bottom-6">
                <h1 class="title">Ваша корзина</h1>
                <div class="choose-text">Товары резервируются на ограниченное время</div>
            </div> 
            <div class="choose-text choose-text-format">
                <div class="formatting">
                    <span>Фото</span>
                    <span>Наименование</span>
                </div>
                <div class="formatting">
                    <span>Размер</span>
                    <span>Количество</span>
                    <span>Стоимость</span>
                    <span>Удалить</span>
                </div>
            </div>
        </section>

        <div class="line line_indent-2"></div>
        <section class="choose-text-format">
            <div class="formatting">
                <div class="formatting__photo" style="background-image: url(../images/catalog/1.jpg);"></div>
                <div class="formatting__text">
                    <div class="choose-text-format-2">Куртка синяя</div>
                    <div class="choose-text-format-3">арт.123412</div>
                </div>
            </div>
            <div class="formatting">
                <span>XL</span>
                <div class="formatting__quantity">
                    <div>1</div>
                    <div>
                        <div class="formatting__quantity-change">+</div>
                        <div class="formatting__quantity-change">-</div>
                    </div>
                </div>
                <span class="choose-text-format-3">2000 руб.</span>
                <div class="popup-button3" style="background-image: url(../images/icons/multiply.svg);"></div>
            </div>
        </section>
        <div class="line line_indent-2"></div>
        <section class="choose-text-format">
            <div class="formatting">
                <div class="formatting__photo" style="background-image: url(../images/catalog/9.jpg);"></div>
                <div class="formatting__text">
                    <div class="choose-text-format-2">Кеды с полоской</div>
                    <div class="choose-text-format-3">арт.123400</div>
                </div>
            </div>
            <div class="formatting">
                <span>48</span>
                <div class="formatting__quantity">
                    <div>1</div>
                    <div>
                        <div class="formatting__quantity-change">+</div>
                        <div class="formatting__quantity-change">-</div>
                    </div>
                </div>
                <span class="choose-text-format-3">2500 руб.</span>
                <div class="popup-button3" style="background-image: url(../images/icons/multiply.svg);"></div>
            </div>
        </section>
        <div class="line line_indent-2"></div>
        <section class="choose-text-format">
            <div class="formatting">
                <div class="formatting__photo" style="background-image: url(../images/catalog/12.jpg);"></div>
                <div class="formatting__text">
                    <div class="choose-text-format-2">Джинсы светлые</div>
                    <div class="choose-text-format-3">арт.124411</div>
                </div>
            </div>
            <div class="formatting">
                <span>46</span>
                <div class="formatting__quantity">
                    <div>2</div>
                    <div>
                        <div class="formatting__quantity-change">+</div>
                        <div class="formatting__quantity-change">-</div>
                    </div>
                </div>
                <span class="choose-text-format-3">3000 руб.</span>
                <div class="popup-button3" style="background-image: url(../images/icons/multiply.svg);"></div>
            </div>
        </section>
        <div class="line line_indent-2"></div>
        <section class="choose-text-format-4 margin-bottom-6">
            <div>Итого:</div>
            <div class="total-price">7500 руб.</div>
        </section>

        <div class="broken-line line_indent">
            <div class="broken-line__unit"></div>
            <div class="broken-line__unit"></div>
            <div class="broken-line__unit"></div>
        </div>

        <!-- Форма заполнения адреса доставки -->

        <section  class="address">
            <h1 class="title">Адрес доставки</h1>
            <div class="choose-text choose-text_address">Все поля обязательны для заполнения</div>
            <form class="address__data">
                <div class="address__data__item address__data__item_full">
                    <div class="address__data__item__text">Выберите вариант доставки</div>
                    <select name="delivery-option" class="categories__items categories__items_address">
                        <option value="courier">Курьерская служба - 500 руб.</option>
                        <option value="pickup">Самовывоз - бесплатно</option>
                        <option value="mail delivery">Доставка по почте (сумма зависит от адреса)</option>
                    </select>
                </div>
                <div class="address__data__flex">
                    <div class="address__data__item address__data__item_half">
                        <div class="address__data__item__text">Имя</div>
                        <input type="text" class="address__data__input">
                    </div>
                    <div class="address__data__item address__data__item_half">
                        <div class="address__data__item__text">Фамилия</div>
                        <input type="text" class="address__data__input">
                    </div>
                </div>
                <div class="address__data__item address__data__item_full">
                    <div class="address__data__item__text">Адрес</div>
                    <input type="text" class="address__data__input">
                </div>
                <div class="address__data__flex">
                    <div class="address__data__item address__data__item_half">
                        <div class="address__data__item__text">Город</div>
                        <input type="text" class="address__data__input">
                    </div>
                    <div class="address__data__item address__data__item_half">
                        <div class="address__data__item__text">Индекс</div>
                        <input type="text" class="address__data__input">
                    </div>
                </div>
                <div class="address__data__flex">
                    <div class="address__data__item address__data__item_half">
                        <div class="address__data__item__text">Телефон</div>
                        <input type="text" class="address__data__input">
                    </div>
                    <div class="address__data__item address__data__item_half">
                        <div class="address__data__item__text">E-mail</div>
                        <input type="text" class="address__data__input">
                    </div>
                </div>
            </form>
        </section>

    </main>

    <?=include($_SERVER['DOCUMENT_ROOT'] . "/heandlers/footer.php")?>
    </div>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/basket.js"></script>
</body>
</html>