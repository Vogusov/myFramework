-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 11 2021 г., 22:11
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fw1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `login` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(30) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `name`, `password`, `email`, `phone`, `date_created`) VALUES
(111, 'test', 'test', 'test', 'test', '', '2021-02-08 18:29:00'),
(112, 'qqq', 'qqq', '$2y$10$8S/2WZWP3fgCTBC1PpH52umctqyKgCVnuN8f3GnhNcXcyoyhcErza', NULL, '', '2021-02-09 11:34:24'),
(113, '222', '222', '$2y$10$y67zymvodh9kyVEw/34/POvw3Nqv5qF4pIW2zeNVrhoszmaDlBJlq', NULL, '', '2021-02-09 11:34:41'),
(114, 'www', 'www', '$2y$10$.tsfgi/NbmZli6kBOZi8E.SOxPD9GiUAJi77wmR0zHRIaz01..pjS', NULL, '', '2021-02-09 11:34:57'),
(115, 'aaa', 'aaa', '$2y$10$K9b/8P8yaHsEvRQNZ2dLiuqlgj.qc4kkK6F.0jeS4.eEkL9nOPKI2', NULL, '', '2021-02-09 11:34:59'),
(116, 'ass', 'ass', '$2y$10$LjfQyvFUtIuTRdUBjSf0Xu1UyTiWH1uA70J5YfRa/mMQgcIIf1F3u', NULL, '', '2021-02-09 11:35:00'),
(117, 'zzz', 'zzz', '$2y$10$qDjGyjorzJM1O1JPPYHaPORR7UAG22fq/T6Lf7VvvCRHip1RmCiJ.', NULL, '', '2021-02-09 11:35:02'),
(118, '55', '55', '$2y$10$h4V/L1U.tSZ/STBRrAjV8uXZs/QmHsIbtds5J2KMRA79Of0mmiPn2', NULL, '', '2021-02-09 11:35:04'),
(120, 'qwe', 'qwe', '$2y$10$hx2.yVuz6o53x..8mIZpHOti6X5umxHKCEqU.Z/3vY.NgTLW5nuNK', NULL, '', '2021-02-09 15:30:26'),
(121, 'opop', 'opop', '$2y$10$noQWG8dgJFUzk3lKVKYTcOnkWHrIhCtxZQS15U3JEKyz3SW/yiJhC', 'opop@opop.op', '111', '2021-02-09 22:07:52'),
(122, 'ghgh', 'ghgh', '$2y$10$C3bgrY7h1tweyplIhpfo0ODqaMivcd953DI3JGfZdm4oqv2ZSenaO', 'ghgh@ghgh.gh', '222', '2021-02-09 22:56:49'),
(123, 'nmnm', 'nmnm', '$2y$10$N00HdcNIDz68nDOwtpagh.hhVI2FeY2ZbfJWvF/A.l0rLMbPSgnvS', 'nmnm@nmnm.nm', '333', '2021-02-09 22:59:21'),
(124, 'ззз', 'ззз', '$2y$10$mP8Ady/SGRAPxAG4sjq5z.cKytJNlMWraZgP7XaW9h8QIaL.kkvp6', 'ppp@ppp.pp', '233232', '2021-02-09 23:04:12'),
(125, 'vb', 'vb', '$2y$10$OBd5vWt2/aC8qj9NTdLw9e5eTclf.XJyXzFU1r62qSSj42QUkHO16', 'vb@vb.ru', '222', '2021-02-11 12:25:31'),
(127, 'ad', 'ad', '$2y$10$kUDRWP9xGI.Z240DR6eqEuW6b5.k4/3sRihWeaO6ftEyLJQD7rXqa', 'ad@ad.ad', '1212', '2021-02-11 12:30:36'),
(129, 'ee', 'ee', '$2y$10$w7tOUB7/38kb/e7RaQGQHe2UUeNgIEXCjxgL1lmgHdLYgDqrXJSdm', 'ee@ee.ee', '1212', '2021-02-11 17:05:33'),
(134, 'qq', 'qq', '$2y$10$WfXEc5qF6BvE549zqePJRelgTZFr7DOWOp1g2254WKyvFHqSRrXmO', 'qq@qq.cm', '07', '2021-02-11 17:45:10');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
