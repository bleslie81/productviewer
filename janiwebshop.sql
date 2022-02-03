-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Jan 31. 21:33
-- Kiszolgáló verziója: 10.4.11-MariaDB
-- PHP verzió: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `janiwebshop`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Lakberendezés'),
(2, 'Bizsu'),
(3, 'Sport'),
(4, 'Konyha'),
(5, 'Ruházat');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `image` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `name` text COLLATE utf8_hungarian_ci NOT NULL,
  `descript` text COLLATE utf8_hungarian_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `descript`, `category_id`, `date`) VALUES
(2, 'images/product/lakb1.jpg', 'Lakberendezési tárgyak', '', 1, '2022-01-31'),
(3, 'images/product/bizsu1.jpg', 'Bizsu', NULL, 2, '2022-01-16'),
(4, 'images/product/bizsu2.jpg', 'Bizsu', NULL, 2, '2022-01-30'),
(5, 'images/product/konyha2.jpg', 'Konyhatechnika', NULL, 4, '2022-01-25'),
(6, 'images/product/konyha1.jpg', 'Konyhai eszközök', NULL, 4, '2022-01-10'),
(7, 'images/product/konyha3.jpg', 'Konyhai gép', NULL, 4, '2022-01-27'),
(8, 'images/product/lakb2.jpg', 'Berendezési tárgyak', NULL, 1, '2022-01-19'),
(9, 'images/product/lakb3.jpg', 'Berendezési tárgyak', NULL, 1, '2022-01-10'),
(10, 'images/product/shoes1.jpg', 'Női cipő', NULL, 5, '2022-01-31');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT a táblához `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
