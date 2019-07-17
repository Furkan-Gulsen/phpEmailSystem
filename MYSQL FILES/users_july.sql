-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 Tem 2019, 21:00:34
-- Sunucu sürümü: 10.1.39-MariaDB
-- PHP Sürümü: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `phptutorial`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users_july`
--

CREATE TABLE `users_july` (
  `person_id` int(6) UNSIGNED NOT NULL,
  `person_fullname` varchar(30) NOT NULL,
  `person_email` varchar(30) NOT NULL,
  `person_username` varchar(30) NOT NULL,
  `person_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `users_july`
--

INSERT INTO `users_july` (`person_id`, `person_fullname`, `person_email`, `person_username`, `person_password`) VALUES
(1, 'furkan gulsen', 'furkan@gmail.com', 'furkan', 'furkan123'),
(2, 'oliver allen', 'oliver@gmail.com', 'oliver', 'oliver123'),
(3, 'jack queen', 'jack@gmail.com', 'jack', 'jack123');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `users_july`
--
ALTER TABLE `users_july`
  ADD PRIMARY KEY (`person_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `users_july`
--
ALTER TABLE `users_july`
  MODIFY `person_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
