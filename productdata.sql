-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 05 apr 2023 om 12:13
-- Serverversie: 10.4.27-MariaDB
-- PHP-versie: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `module_8`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `productdata`
--

CREATE TABLE `productdata` (
  `id` int(11) NOT NULL,
  `product` varchar(50) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `productdata`
--

INSERT INTO `productdata` (`id`, `product`, `price`) VALUES
(3, 'saturn', 0),
(4, 'venus', 0),
(7, 'earth', 0),
(8, 'jupiter', 0),
(9, 'venus', 0),
(10, 'earth', 0),
(11, 'venus', 0),
(12, 'jupiter', 0),
(13, 'venus', 0),
(14, 'earth', 0),
(15, 'saturn', 4.99),
(16, 'test', 22.22);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `productdata`
--
ALTER TABLE `productdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `productdata`
--
ALTER TABLE `productdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
