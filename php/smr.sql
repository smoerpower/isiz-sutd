-- phpMyAdmin SQL Dump
-- version 4.5.4
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июл 07 2016 г., 22:51
-- Версия сервера: 5.7.17
-- Версия PHP: 5.6.30

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`


CREATE TABLE IF NOT EXISTS 'news' (
  id TINYINT NOT NULL AUTO_INCREMENT,
  title varchar(255) NOT NULL,
  text text NOT NULL,
  image varchar(100) NOT NULL DEFAULT 'default.jpg',
  date date NOT NULL,
  time time NOT NULL,
  author varchar(50) NOT NULL DEFAULT 'Admin',
  PRIMARY KEY ('id'))
  ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

--
-- Дамп данных таблицы `news`
--

INSERT INTO 'news' ('id', 'title', 'text', 'image', 'date', 'time', 'author') VALUES
(1, 'START', '25%', 'default.jpg', '2016-07-07', '00:00:20', 'Admin'),
(2, 'MEDIUM', '65%', 'default.jpg', '2016-07-07', '00:00:20', 'Adimn'),
(18, 'FINISH', '100%', 'default.jpg', '2016-07-07', '00:00:20', 'Admin');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `users_login` varchar(30) NOT NULL,
  `users_password` varchar(32) NOT NULL,
  `users_hash` varchar(32) NOT NULL,
  PRIMARY KEY (`users_id`))
ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `users`
--
--
-- INSERT INTO `users` (`users_id`, `users_login`, `users_password`, `users_hash`) VALUES
-- (2, 'localhost', 'asdasdsdasdasdasdweregr', '3a8c53ff93dfb35815155eaf20d9ec21');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
