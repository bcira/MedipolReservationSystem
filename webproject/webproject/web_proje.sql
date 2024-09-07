-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 14 Haz 2020, 09:54:45
-- Sunucu sürümü: 5.7.23
-- PHP Sürümü: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `web_proje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `meeting_title` char(100) NOT NULL,
  `room_type` char(25) NOT NULL,
  `att_number` int(11) NOT NULL,
  `date` date NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `reservation_note` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `books`
--

INSERT INTO `books` (`meeting_title`, `room_type`, `att_number`, `date`, `start`, `end`, `reservation_note`) VALUES
('class1', 'classroom', 50, '2020-07-01', '18:00:00', '19:00:00', 'beverages needed'),
('class2', 'classroom', 60, '2020-06-28', '09:00:00', '11:00:00', ''),
('meeting2', 'meeting', 10, '2020-06-25', '19:00:00', '21:00:00', ''),
('exam2', 'exam', 35, '2020-07-02', '07:00:00', '10:00:00', ''),
('math class', 'classroom', 90, '2020-06-29', '10:00:00', '11:00:00', ''),
('exam1', 'exam', 100, '2020-06-26', '11:00:00', '13:00:00', ''),
('meeting1', 'meeting', 15, '2020-06-29', '15:00:00', '17:00:00', 'beverages needed');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roomname` varchar(255) NOT NULL,
  `roomlocation` varchar(255) NOT NULL,
  `roomcapacity` int(11) NOT NULL,
  `projector` char(50) NOT NULL,
  `microphone` char(3) NOT NULL,
  `plug` char(3) NOT NULL,
  `roomphoto` varchar(535) NOT NULL,
  `availability` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `rooms`
--

INSERT INTO `rooms` (`id`, `roomname`, `roomlocation`, `roomcapacity`, `projector`, `microphone`, `plug`, `roomphoto`, `availability`) VALUES
(5, 'C210', ' 2. Floor', 40, '', '', '', '', 1),
(8, 'CZ16', ' 1. Floor ', 50, '', '', '', '', 1),
(15, 'C315', ' 3. Floor', 20, '', '', '', '', 1),
(17, 'asdf', ' 2. Floor', 40, '', '', '', '', 0),
(19, 'aaa', ' 2. Floor', 30, '', '', '', '', 0),
(21, 'kkk', ' 1. Floor ', 30, '', '', '', '', 0),
(27, 'dddd', ' 2. Floor', 30, '', '', '', '', 0),
(28, 'ttt', ' 1. Floor ', 20, '', '', '', '', 0),
(29, 'CZ18', ' 1. Floor ', 100, '', '', '', '', 1),
(30, 'C211', ' 2. Floor', 50, '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `useradmin`
--

DROP TABLE IF EXISTS `useradmin`;
CREATE TABLE IF NOT EXISTS `useradmin` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pnumber` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `a_type` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `useradmin`
--

INSERT INTO `useradmin` (`name`, `email`, `pnumber`, `password`, `a_type`, `id`) VALUES
('Fuat Beraat Avsar', 'qwerty@gmail.com', '1234567890', '123', 'admin', 1),
('kubra', 'kubrakaraoglan58@gmail.com', '', '1234', 'user', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
