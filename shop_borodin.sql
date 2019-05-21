-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 15 2019 г., 14:19
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop_borodin`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `category_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `price`, `pic`, `category_id`) VALUES
(1, 'Куртка синяя', 2000, '1.jpg', 5),
(2, 'Куртка зеленая', 2500, '2.jpg', 5),
(5, 'Куртка кожаная', 5000, '6.jpg', 5),
(6, 'Кеды Adidas', 3000, '7.jpg', 6),
(7, 'Кеды с полоской', 2500, '9.jpg', 6),
(8, 'Джинсы темные', 3000, '11.jpg', 8),
(9, 'Джинсы светлые', 3000, '12.jpg', 8),
(10, 'Куртка розовая', 2500, '13.jpg', 9),
(11, 'Куртка-парка', 3000, '14.jpg', 9),
(12, 'Брюки черные', 1500, '15.jpg', 10),
(13, 'Брюки розовые', 2000, '16.jpg', 10),
(14, 'Кроссовки розовые', 3000, '21.jpg', 11),
(15, 'Кроссовки черные с розовым', 3500, '22.jpg', 11),
(16, 'Куртка синяя детская', 2500, '17.jpg', 12),
(17, 'Куртка розовая детская', 3000, '18.jpg', 12),
(18, 'Брюки модульные детские', 3500, '19.jpg', 13),
(19, 'Брюки спортивные детские', 2000, '20.jpg', 13),
(20, 'Кеды синие детские', 2000, '23.jpg', 14),
(21, 'Кеды розовые детские', 2000, '24.jpg', 14);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `parent_category` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_category`) VALUES
(1, 'Мужчинам', 0),
(2, 'Женщинам', 0),
(3, 'Детям', 0),
(5, 'Куртки-м', 1),
(6, 'Обувь-м', 1),
(8, 'Брюки-м', 1),
(9, 'Куртки-ж', 2),
(10, 'Брюки-ж', 2),
(11, 'Обувь-ж', 2),
(12, 'Куртки-д', 3),
(13, 'Брюки-д', 3),
(14, 'Обувь-д', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `emails`
--

CREATE TABLE `emails` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'id пользователя',
  `email` varchar(50) NOT NULL COMMENT 'email'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `emails`
--

INSERT INTO `emails` (`id`, `email`) VALUES
(1, 'daronmalakian992@gmail.com'),
(2, 'ivanov@mail.ru'),
(3, 'ivanov@mail.ru'),
(4, 'ivanov@mail.ru'),
(5, 'ivanov@mail.ru'),
(6, 'ivanov@mail.ru'),
(7, 'ivanov@mail.ru'),
(8, 'ivanov@mail.ru'),
(9, 'ivanov@mail.ru'),
(10, 'ivanov@mail.ru'),
(11, 'ivanov@mail.ru'),
(12, 'ivanov@mail.ru'),
(13, 'ivanov@mail.ru'),
(14, ''),
(15, ''),
(16, ''),
(17, '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id пользователя', AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
