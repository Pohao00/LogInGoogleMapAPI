-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-12-01 17:35:48
-- 伺服器版本: 10.1.16-MariaDB
-- PHP 版本： 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `sensor_network`
--

-- --------------------------------------------------------

--
-- 資料表結構 `sensor_value`
--

CREATE TABLE `sensor_value` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '0',
  `value` varchar(50) NOT NULL DEFAULT '0',
  `address` varchar(50) NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `sensor_value`
--

INSERT INTO `sensor_value` (`id`, `username`, `value`, `address`, `time`) VALUES
(1, 'chen', '55', '台灣台東', '2016-11-30 08:11:25'),
(2, 'chen', '44', '台灣台東', '2016-11-30 08:11:58'),
(5, 'su', '77', '高雄', '2016-11-29 12:59:45'),
(6, 'su', '66', '高雄', '2016-11-29 12:59:56'),
(7, 'su', '100', '高雄', '2016-11-29 13:00:00'),
(8, 'chen', '88', '台中', '2016-11-29 13:46:06'),
(9, 'su', '66', '台北', '2016-11-30 07:49:36');

-- --------------------------------------------------------

--
-- 資料表結構 `user_info`
--

CREATE TABLE `user_info` (
  `username` varchar(50) NOT NULL,
  `passwd` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `user_info`
--

INSERT INTO `user_info` (`username`, `passwd`) VALUES
('chen', '123'),
('su', '123');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `sensor_value`
--
ALTER TABLE `sensor_value`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`username`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `sensor_value`
--
ALTER TABLE `sensor_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
