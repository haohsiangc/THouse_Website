-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 
-- 伺服器版本: 5.7.17-log
-- PHP 版本： 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `teahouse`
--

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `mId` int(8) UNSIGNED ZEROFILL NOT NULL,
  `mName` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mPhone` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mEmail` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mAddr` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mPaswd` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`mId`, `mName`, `mPhone`, `mEmail`, `mAddr`, `mPaswd`) VALUES
(00000001, '莊皓翔', '988327382', 'howardjhs@gmail.com', '桃園市桃園區蓮海路70號國立中山大學資管系110級', '3322'),
(00000003, '康維軒', '063332222', 'sammy@gmail.com', '桃園市桃園區蓮海路70號國立中山大學資管系', '5656'),
(00000006, '郭家銘', '063322245', 'kuo@ai.com', '台北市內湖區喔喔喔喔', '5656'),
(00000009, '嗨', '0978456123', 'jj@gmail.com', '基隆市暖暖區1123', '12');

-- --------------------------------------------------------

--
-- 資料表結構 `orderlist`
--

CREATE TABLE `orderlist` (
  `cID` tinyint(3) NOT NULL,
  `cName` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cPhone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pName` enum('紅茶包','綠茶包','烏龍茶包','鐵觀音') COLLATE utf8_unicode_ci NOT NULL,
  `pQuantity` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pAddress` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `orderlist`
--

INSERT INTO `orderlist` (`cID`, `cName`, `cPhone`, `pName`, `pQuantity`, `pAddress`) VALUES
(3, 'virginia', '0908643538', '綠茶包', '5', 'taipei'),
(4, '你的名字', '手機號碼', '紅茶包', '訂購數量', '寄送地址'),
(5, '你的名字', '手機號碼', '紅茶包', '訂購數量', '寄送地址'),
(6, '你的名字', '手機號碼', '紅茶包', '訂購數量', '寄送地址'),
(7, 'Daniel', '0909656656', '綠茶包', '3', 'taipei'),
(8, '你的名字', '手機號碼', '紅茶包', '訂購數量', '寄送地址'),
(9, 'sammy', '0908643537', '綠茶包', '10', 'taichung'),
(10, '', '', '紅茶包', '', ''),
(11, '', '', '紅茶包', '', ''),
(12, '', '', '紅茶包', '', ''),
(13, '11:00', '0908643538', '紅茶包', '3', 'taipei'),
(14, 'virginia', '0908643537', '綠茶包', '3', 'taipei'),
(15, 'Sammy', '0908643537', '綠茶包', '2', 'taichung'),
(16, 'Sammr', '0908643537', '烏龍茶包', '3', 'taipei'),
(17, 'Sammr', '0908643538', '烏龍茶包', '3', 'taipei'),
(18, 'virginia', '0908643538', '烏龍茶包', '3', 'taipei'),
(19, '', '', '紅茶包', '', ''),
(20, 'virginia', '0908643538', '烏龍茶包', '3', 'taichung'),
(21, '', '', '紅茶包', '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `reservationlist`
--

CREATE TABLE `reservationlist` (
  `cID` tinyint(3) NOT NULL,
  `cName` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cPhone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cQuantity` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cTime` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `reservationlist`
--

INSERT INTO `reservationlist` (`cID`, `cName`, `cPhone`, `cQuantity`, `cTime`) VALUES
(1, 'virginia', '0908643538', '3', '下午1點'),
(2, 'virginia', '0908643538', '3', '下午1點'),
(3, 'Sammr', '0908643538', '3', '11'),
(4, 'Sammr', '0908643538', '3', '11'),
(5, 'virginia', '0908643537', '3', '下午1點'),
(6, 'test', '0908643538', '3', '15:00'),
(7, 'bobo', '0908643538', '3', '17:00'),
(8, 'test2', '', '', '11:00'),
(9, '', '', '', '11:00'),
(10, 'Sammr', '0908643537', '3', '15:00'),
(11, '', '', '', '11:00'),
(12, '莊皓翔', '0955666333', '2', '11:00');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mId`);

--
-- 資料表索引 `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`cID`);

--
-- 資料表索引 `reservationlist`
--
ALTER TABLE `reservationlist`
  ADD PRIMARY KEY (`cID`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `mId` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- 使用資料表 AUTO_INCREMENT `orderlist`
--
ALTER TABLE `orderlist`
  MODIFY `cID` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- 使用資料表 AUTO_INCREMENT `reservationlist`
--
ALTER TABLE `reservationlist`
  MODIFY `cID` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
