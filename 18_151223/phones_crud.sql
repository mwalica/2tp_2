-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Gru 2020, 12:25
-- Wersja serwera: 10.4.13-MariaDB
-- Wersja PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `phones_crud`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `phones`
--

CREATE TABLE `phones` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `phones`
--

INSERT INTO `phones` (`id`, `title`, `description`, `created_at`) VALUES
(3, 'Samsung Galaxy M21', 'Samsung Galaxy M21 czarny przyciągnie wzrok nie jednej osoby, to za sprawą eleganckiej obudowy. Wkomponowano w nią świetny wyświetlacz 6,4” Super AMOLED zapewni Ci on niezapomniane efekty wizualne i wyrazisty obraz. ', '2020-12-13 16:31:36'),
(4, 'Apple iPhone 12', 'Kompaktowy Apple iPhone 12 Mini 128GB Black 5G świetnie leży w dłoni dzięki rozmiarowi ekranu o przekątnej 5,4\". Mniejszy rozmiar nie oznacza jednak gorszych możliwości.', '2020-12-13 16:32:36');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `phones`
--
ALTER TABLE `phones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
