-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 26 Nis 2024, 19:25:22
-- Sunucu sürümü: 8.2.0
-- PHP Sürümü: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `gamesstore`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `id` int NOT NULL AUTO_INCREMENT,
  `gtitle` text NOT NULL,
  `gdesc` text NOT NULL,
  `price` int NOT NULL DEFAULT '10',
  `gcategory` int NOT NULL,
  `gdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `gamescategoryId` (`gcategory`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `games`
--

INSERT INTO `games` (`id`, `gtitle`, `gdesc`, `price`, `gcategory`, `gdate`) VALUES
(1, 'EA FC 24', 'EA FC 2024 bir futbol oyunudur.', 300, 1, '2024-04-22 00:01:05'),
(2, 'Counter-Strike 2', 'Counter-Strike 2 ya da kısa adıyla CS2, Valve tarafından geliştirilen taktiksel birinci şahıs nişancı oyunudur. Counter-Strike serisinin 5. oyunudur.', 150, 2, '2024-04-22 00:26:56'),
(3, 'Forza Horizon 4', 'Forza Horizon 4, 2018 yılında Playground Games tarafından geliştirilen ve Microsoft Studios tarafından yayınlanan bir yarış video oyunudur. Oyun, Forza Horizon serisinin dördüncü oyunu olup 2 Ekim 2018 tarihinde Microsoft Windows ve Xbox One için piyasaya sürüldü.', 80, 3, '2024-04-22 12:18:28'),
(4, 'Need for Speed Unbound', 'Need for Speed Unbound, 2022 yılında Criterion Games tarafından geliştirilen ve Electronic Arts tarafından yayınlanan bir sokak yarışı video oyunudur. Oyun, Need for Speed serisinin 25. oyunu olup Aralık 2022 tarihinde Microsoft Windows, PlayStation 5, Xbox Series X ve Xbox Series S için piyasaya sürüldü.', 100, 3, '2024-04-22 12:18:59'),
(5, 'Battlefield 1', 'Battlefield 1, Electronic Arts tarafından 21 Ekim 2016\'da piyasaya sürülmüş bir birinci şahıs nişancı oyunudur. I. Dünya Savaşı\'nı konu almaktadır.', 200, 4, '2024-04-22 12:19:42');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gamescategory`
--

DROP TABLE IF EXISTS `gamescategory`;
CREATE TABLE IF NOT EXISTS `gamescategory` (
  `id` int NOT NULL AUTO_INCREMENT,
  `categoryName` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `gamescategory`
--

INSERT INTO `gamescategory` (`id`, `categoryName`) VALUES
(1, 'Spor'),
(2, 'Aksiyon'),
(3, 'Simülasyon'),
(4, 'Savaş'),
(5, 'RPG'),
(6, 'MMO');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `mail` text NOT NULL,
  `pass` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pic` varchar(200) NOT NULL DEFAULT 'person.png',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `mail`, `pass`, `createdDate`, `pic`) VALUES
(1, 'yavuz', 'asd@gmail.com', 'asd', '2024-04-22 01:15:08', '5487f7bd534d0dd31304136ff0d46bd3.pHp');

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `gamescategoryId` FOREIGN KEY (`gcategory`) REFERENCES `gamescategory` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
