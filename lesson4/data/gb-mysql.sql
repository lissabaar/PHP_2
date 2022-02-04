-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Фев 01 2022 г., 00:45
-- Версия сервера: 8.0.11
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `card`
--

CREATE TABLE `card` (
  `id` int(11) NOT NULL,
  `session_id` text NOT NULL,
  `items_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `count` int(11) NOT NULL DEFAULT '1',
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `card`
--

INSERT INTO `card` (`id`, `session_id`, `items_id`, `user_id`, `count`, `price`) VALUES
(104, 'ainu17j5strtp4750tlm1d87a526qmhm', 1, 1, 1, 134),
(105, 'ainu17j5strtp4750tlm1d87a526qmhm', 2, 1, 4, 343),
(106, 'o8rq8rrl12kpm0o1o9ejftorpol9jmkv', 5, 1, 5, 34567),
(107, 'o8rq8rrl12kpm0o1o9ejftorpol9jmkv', 6, 1, 1, 3456),
(108, 'r3i9ffmamv1n78t5ldsrpeqgivm8q159', 2, 3, 1, 343),
(109, 'r3i9ffmamv1n78t5ldsrpeqgivm8q159', 5, 3, 1, 34567),
(110, '2asrruonu8ipng9r20dcrvd4lqkls5ud', 3, 1, 1, 345),
(112, 'dnh64n5llpaeu54upun793einnhiltga', 3, 1, 3, 345),
(114, 'e9qt8hq2llv3f8ik76mq2640vj5hh9nl', 3, 1, 1, 345),
(115, 'e9qt8hq2llv3f8ik76mq2640vj5hh9nl', 2, 1, 3, 343),
(117, '2dl82bte74rn628qdde17bu1l3nmfqb2', 3, 0, -1, 345),
(118, 'ulunnh9qao7lj8381l9h3ar4ktksoald', 1, 0, 2, 134),
(119, 'ulunnh9qao7lj8381l9h3ar4ktksoald', 2, 0, 1, 343),
(120, 'ulunnh9qao7lj8381l9h3ar4ktksoald', 3, 0, 1, 345);

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--

CREATE TABLE `city` (
  `Name` varchar(100) NOT NULL,
  `ID` int(11) NOT NULL,
  `CountryCode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `country`
--

CREATE TABLE `country` (
  `Code` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Region` varchar(100) NOT NULL,
  `Population` int(11) NOT NULL,
  `Language` varchar(100) NOT NULL,
  `Capital` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `countrylanguage`
--

CREATE TABLE `countrylanguage` (
  `CountryCode` int(11) NOT NULL,
  `IsOfficial` varchar(10) NOT NULL,
  `Language` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `feedback` text NOT NULL,
  `id_item` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `username`, `feedback`, `id_item`) VALUES
(19, 'alex', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, placeat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, tenetur laborum molestiae voluptate veniam harum voluptatum.\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, placeat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, tenetur laborum molestiae voluptate veniam harum voluptatum.\r\n', 3),
(34, 'Alex', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, placeat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, tenetur laborum molestiae voluptate veniam harum voluptatum.\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, placeat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, tenetur laborum molestiae voluptate veniam harum voluptatum.\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, placeat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, tenetur laborum molestiae voluptate veniam harum voluptatum.\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, placeat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, tenetur laborum molestiae voluptate veniam harum voluptatum.\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, placeat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, tenetur laborum molestiae voluptate veniam harum voluptatum.\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, placeat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, tenetur laborum molestiae voluptate veniam harum voluptatum.\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, placeat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, tenetur laborum molestiae voluptate veniam harum voluptatum.\r\n', 1),
(35, 'uder', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, placeat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, tenetur laborum molestiae voluptate veniam harum voluptatum.\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, placeat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, tenetur laborum molestiae voluptate veniam harum voluptatum.\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, placeat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, tenetur laborum molestiae voluptate veniam harum voluptatum.\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, placeat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, tenetur laborum molestiae voluptate veniam harum voluptatum.\r\n', 1),
(40, 'great', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, placeat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, tenetur laborum molestiae voluptate veniam harum voluptatum.\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, placeat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, tenetur laborum molestiae voluptate veniam harum voluptatum.\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, placeat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, tenetur laborum molestiae voluptate veniam harum voluptatum.\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, placeat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, tenetur laborum molestiae voluptate veniam harum voluptatum.\r\n', 2),
(41, 'юзер2', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, placeat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, tenetur laborum molestiae voluptate veniam harum voluptatum.\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, placeat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, tenetur laborum molestiae voluptate veniam harum voluptatum.\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, placeat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, tenetur laborum molestiae voluptate veniam harum voluptatum.\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, placeat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, tenetur laborum molestiae voluptate veniam harum voluptatum.\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, placeat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, tenetur laborum molestiae voluptate veniam harum voluptatum.\r\n', 2),
(75, 'п55', 'п54', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `url`, `name`, `views`, `size`) VALUES
(1, 'localhost/img/big/01.jpg', '01.jpg', 4, 55705),
(2, 'localhost/img/big/02.jpg', '02.jpg', 1, 60222),
(3, 'localhost/img/big/03.jpg', '03.jpg', 7, 26996),
(4, 'localhost/img/big/03bbab447efd25022ccef4e621a3f84d.jpeg', '03bbab447efd25022ccef4e621a3f84d.jpeg', 0, 280387),
(5, 'localhost/img/big/04.jpg', '04.jpg', 0, 53386),
(6, 'localhost/img/big/05.jpg', '05.jpg', 1, 136330),
(7, 'localhost/img/big/06.jpg', '06.jpg', 0, 62812),
(8, 'localhost/img/big/07.jpg', '07.jpg', 0, 217530),
(9, 'localhost/img/big/09.jpg', '09.jpg', 23, 135563),
(10, 'localhost/img/big/2ae884849d742ae0c7339fef49ca81c3.jpg', '2ae884849d742ae0c7339fef49ca81c3.jpg', 2, 258831),
(11, 'localhost/img/big/389.jpg', '389.jpg', 1, 647807),
(12, 'localhost/img/big/64b732f1a3d2d05e4bbbbf9a1adc2e01.jpg', '64b732f1a3d2d05e4bbbbf9a1adc2e01.jpg', 2, 253380),
(13, 'localhost/img/big/amadu-shaw-screen-3840x2160-2019-09-16-19-44-46.jpg', 'amadu-shaw-screen-3840x2160-2019-09-16-19-44-46.jpg', 24, 806924),
(14, 'localhost/img/big/anastasia-ermakova-noodle-bar1.jpg', 'anastasia-ermakova-noodle-bar1.jpg', 1, 449914),
(15, 'localhost/img/big/andres-rodriguez-05.jpg', 'andres-rodriguez-05.jpg', 2, 199817);

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `price`, `image`) VALUES
(1, 'Синий цветок', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, placeat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, tenetur laborum molestiae voluptate veniam harum voluptatum.', 134, '/img/catalog/flower-blue.png'),
(2, 'Розовый цветок', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, placeat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, tenetur laborum molestiae voluptate veniam harum voluptatum.', 343, '/img/catalog/flower-pink.png'),
(3, 'Сиреневый цветок', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, placeat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, tenetur laborum molestiae voluptate veniam harum voluptatum.', 345, '/img/catalog/flower-purple.png'),
(4, 'Красный цветок', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam exercitationem sed aliquid consequuntur natus laudantium? Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni totam facilis consequatur earum blanditiis debitis!', 2345, '/img/catalog/flower-red.png'),
(5, 'Белый цветок', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam exercitationem sed aliquid consequuntur natus laudantium? Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni totam facilis consequatur earum blanditiis debitis!', 34567, '/img/catalog/flower-white.png'),
(6, 'Желтый цветок', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam exercitationem sed aliquid consequuntur natus laudantium? Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni totam facilis consequatur earum blanditiis debitis!', 3456, '/img/catalog/flower-yellow.png');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` text NOT NULL,
  `price_total` int(11) NOT NULL,
  `session_id` text NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Принят'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `price_total`, `session_id`, `status`) VALUES
(8, 'Alex', '23456789', 1506, 'ainu17j5strtp4750tlm1d87a526qmhm', 'Принят'),
(9, 'Alex', '3456789', 176291, 'o8rq8rrl12kpm0o1o9ejftorpol9jmkv', 'Собран'),
(10, '45ty', '234567', 34910, 'r3i9ffmamv1n78t5ldsrpeqgivm8q159', 'Отправлен'),
(11, 'тест', '+79000000000', 1374, 'e9qt8hq2llv3f8ik76mq2640vj5hh9nl', 'Принят'),
(12, 'ntcn', '234567', 956, 'ulunnh9qao7lj8381l9h3ar4ktksoald', 'Принят');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `hash` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `name` text,
  `phone` text,
  `email` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `hash`, `name`, `phone`, `email`) VALUES
(1, 'admin', '$2y$10$VrXIfJijghgJrdKaAKGZzeAms5oo0gbMhSKnttAZffYMxHd47No7u', '186069745461f832e0ae2923.67972893', NULL, NULL, NULL),
(2, 'test', 'test', NULL, NULL, NULL, NULL),
(3, 'user', '$2y$10$X76wt/MwC7ze3xVOVTiybOGDbX.Z1EVKW3aXaiM9SEqI9yHaC6SaK', '63560056060893dfc2147e4.41202809', '', '', ''),
(4, 'testUser', '$2y$10$hbRCMORU1HF/8VszOjBP6.0neNB8aVpwhYTxMMJhLG5HDmub.LHty', NULL, 'VASILISA ZHNEVSKYA', '23456789', 'lisaabaar@gmail.com');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `card`
--
ALTER TABLE `card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1118;

--
-- AUTO_INCREMENT для таблицы `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
