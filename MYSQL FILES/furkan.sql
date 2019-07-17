-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 Tem 2019, 20:59:27
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
-- Tablo için tablo yapısı `furkan`
--

CREATE TABLE `furkan` (
  `messages_id` int(11) UNSIGNED NOT NULL,
  `header` varchar(100) NOT NULL,
  `messages_sender` varchar(100) NOT NULL,
  `messages_content` varchar(5000) NOT NULL,
  `messages_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `furkan`
--

INSERT INTO `furkan` (`messages_id`, `header`, `messages_sender`, `messages_content`, `messages_date`) VALUES
(1, 'First Email', 'oliver@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida arcu ac tortor dignissim convallis. Ut venenatis tellus in metus vulputate eu scelerisque. Scelerisque varius morbi enim nunc faucibus a pellentesque. Porta lorem mollis aliquam ut porttitor leo a diam. Nec feugiat nisl pretium fusce id velit ut. Enim eu turpis egestas pretium. Molestie at elementum eu facilisis. Orci dapibus ultrices in iaculis nunc sed augue lacus viverra. Cum sociis natoque penatibus et magnis dis parturient montes nascetur. Nisl rhoncus mattis rhoncus urna neque viverra justo nec. Morbi tristique senectus et netus et malesuada fames. Eget arcu dictum varius duis at consectetur lorem donec. Amet nulla facilisi morbi tempus iaculis urna id volutpat lacus.', '2019-07-17 18:07:40'),
(2, 'How are you?', 'oliver@gmail.com', 'Quam vulputate dignissim suspendisse in est ante. Vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare. Orci ac auctor augue mauris. Et odio pellentesque diam volutpat commodo. Pulvinar pellentesque habitant morbi tristique. In est ante in nibh mauris cursus mattis. Egestas maecenas pharetra convallis posuere. Ultrices vitae auctor eu augue ut. Turpis egestas pretium aenean pharetra magna ac placerat. Lacus viverra vitae congue eu consequat ac felis.\r\n\r\nAt augue eget arcu dictum varius duis. Cursus euismod quis viverra nibh cras. Tellus rutrum tellus pellentesque eu. Vestibulum sed arcu non odio euismod. Sagittis purus sit amet volutpat. Pharetra magna ac placerat vestibulum lectus. At erat pellentesque adipiscing commodo elit at imperdiet. Nam aliquam sem et tortor consequat id porta nibh venenatis. Volutpat maecenas volutpat blandit aliquam etiam erat. Iaculis nunc sed augue lacus viverra vitae. In eu mi bibendum neque egestas congue. Id cursus metus aliquam eleifend mi in nulla.', '2019-07-17 18:08:13'),
(3, 'I sent business documents', 'jack@gmail.com', 'Suspendisse faucibus interdum posuere lorem ipsum dolor sit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Risus nec feugiat in fermentum posuere urna nec tincidunt. Lacus sed turpis tincidunt id. Lacus suspendisse faucibus interdum posuere lorem ipsum dolor sit. Rhoncus aenean vel elit scelerisque. Maecenas ultricies mi eget mauris pharetra et. Eget magna fermentum iaculis eu non. At urna condimentum mattis pellentesque. Turpis egestas integer eget aliquet nibh praesent. Congue nisi vitae suscipit tellus mauris a diam maecenas. Cras ornare arcu dui vivamus arcu felis bibendum ut tristique. Lacus viverra vitae congue eu consequat ac felis donec. Faucibus ornare suspendisse sed nisi lacus sed viverra tellus. Tortor posuere ac ut consequat.\r\n\r\nTincidunt vitae semper quis lectus nulla at volutpat. Eget velit aliquet sagittis id consectetur purus ut faucibus. Donec enim diam vulputate ut pharetra sit amet aliquam. Vitae elementum curabitur vitae nunc sed velit dignissim sodales ut. Lacus vestibulum sed arcu non odio euismod lacinia at. Mauris a diam maecenas sed. Amet nisl purus in mollis nunc. Felis donec et odio pellentesque diam volutpat commodo sed. Non pulvinar neque laoreet suspendisse interdum consectetur libero id. Auctor eu augue ut lectus arcu bibendum. Egestas sed sed risus pretium quam vulputate.', '2019-07-17 18:14:06');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `furkan`
--
ALTER TABLE `furkan`
  ADD PRIMARY KEY (`messages_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `furkan`
--
ALTER TABLE `furkan`
  MODIFY `messages_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
