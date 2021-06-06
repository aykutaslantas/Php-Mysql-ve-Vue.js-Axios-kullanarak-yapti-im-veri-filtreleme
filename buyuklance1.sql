-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 31 May 2021, 13:11:43
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `buyuklance1`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anatablo`
--

CREATE TABLE `anatablo` (
  `id` int(11) NOT NULL,
  `tarih` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tutar` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hesap` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `grupuye` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `birim` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `anatablo`
--

INSERT INTO `anatablo` (`id`, `tarih`, `tutar`, `aciklama`, `hesap`, `grupuye`, `birim`) VALUES
(1, 'adsfdasf', 'asdfaas', 'lorem ipsum dolare', '', '', ''),
(2, 'asdasdasdasd', 'fg34tff', 'deneme aciklama', '', '', ''),
(3, 'dasdasdsad', 'sadlfşşlasdkasdf', 'bir diğer deneme yazisi', '', '', ''),
(4, 'asddddddda', 'asasdcccccc', 'televizyon', '', '', ''),
(5, 'asdsfdasfasdfdsafdsaf', 'bbbbbbbb', 'c4ff deneme son', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `aramakriterleri`
--

CREATE TABLE `aramakriterleri` (
  `id` int(11) NOT NULL,
  `hesapadi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `uyegrupadi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `birimadi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hesapmi` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `birimmi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `uyegrupmu` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `aramakriterleri`
--

INSERT INTO `aramakriterleri` (`id`, `hesapadi`, `uyegrupadi`, `birimadi`, `aciklama`, `hesapmi`, `birimmi`, `uyegrupmu`) VALUES
(1, 'dddasad', 'uye adi', 'birim adi 2', 'denemememememem', 'false', 'false', 'false');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `birim`
--

CREATE TABLE `birim` (
  `id` int(11) NOT NULL,
  `birimadi` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `birim`
--

INSERT INTO `birim` (`id`, `birimadi`) VALUES
(1, 'birim adi '),
(2, 'birim adi 2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hesap`
--

CREATE TABLE `hesap` (
  `id` int(11) NOT NULL,
  `hesapadi` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hesap`
--

INSERT INTO `hesap` (`id`, `hesapadi`) VALUES
(1, 'dddasad'),
(2, 'deneme hesap');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uye`
--

CREATE TABLE `uye` (
  `id` int(11) NOT NULL,
  `uyeadi` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uye`
--

INSERT INTO `uye` (`id`, `uyeadi`) VALUES
(1, 'uye adi'),
(2, 'uye adi 4');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `anatablo`
--
ALTER TABLE `anatablo`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `aramakriterleri`
--
ALTER TABLE `aramakriterleri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `birim`
--
ALTER TABLE `birim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hesap`
--
ALTER TABLE `hesap`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `uye`
--
ALTER TABLE `uye`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `anatablo`
--
ALTER TABLE `anatablo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `aramakriterleri`
--
ALTER TABLE `aramakriterleri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `birim`
--
ALTER TABLE `birim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `hesap`
--
ALTER TABLE `hesap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `uye`
--
ALTER TABLE `uye`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
