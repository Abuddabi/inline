-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Мар 03 2020 г., 23:59
-- Версия сервера: 5.7.29-0ubuntu0.18.04.1
-- Версия PHP: 7.3.15-3+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `inline`
--

-- --------------------------------------------------------

--
-- Структура таблицы `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `mother_id` int(11) DEFAULT NULL COMMENT 'id матери	',
  `spouse_id` int(11) DEFAULT NULL COMMENT 'id супруга(супруги)',
  `lastname` varchar(64) NOT NULL,
  `firstname` varchar(64) NOT NULL,
  `age` smallint(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `person`
--

INSERT INTO `person` (`id`, `mother_id`, `spouse_id`, `lastname`, `firstname`, `age`) VALUES
(1, NULL, 4, 'Иванов', 'Иван', 46),
(2, 4, NULL, 'Иванов', 'Вася', 4),
(3, 4, NULL, 'Иванова', 'Даша', 6),
(4, NULL, 1, 'Иванова', 'Мария', 32),
(5, NULL, NULL, 'Петров', 'Петр', 46),
(6, NULL, 8, 'Сидоров', 'Сандро', 46),
(7, NULL, NULL, 'Сидорова', 'Елена', 40),
(8, NULL, 6, 'Волкова', 'Ксения', 39),
(9, 8, NULL, 'Волкова', 'Настя', 9);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
