-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 16. Okt 2020 um 17:12
-- Server-Version: 10.4.14-MariaDB
-- PHP-Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `oekologisch`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `img_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_intro`
--

CREATE TABLE `tbl_intro` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `goals` text NOT NULL,
  `problems` text NOT NULL,
  `gif_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_lesson`
--

CREATE TABLE `tbl_lesson` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `gif_url` varchar(255) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `top_three` tinyint(1) NOT NULL,
  `lesson_nr` int(11) NOT NULL,
  `important` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `tbl_intro`
--
ALTER TABLE `tbl_intro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category_id` (`category_id`);

--
-- Indizes für die Tabelle `tbl_lesson`
--
ALTER TABLE `tbl_lesson`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `tbl_intro`
--
ALTER TABLE `tbl_intro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `tbl_lesson`
--
ALTER TABLE `tbl_lesson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `tbl_intro`
--
ALTER TABLE `tbl_intro`
  ADD CONSTRAINT `fk_category_id` FOREIGN KEY (`category_id`) REFERENCES `tbl_category` (`id`);

--
-- Constraints der Tabelle `tbl_lesson`
--
ALTER TABLE `tbl_lesson`
  ADD CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `tbl_category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
