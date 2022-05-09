-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 01 apr 2022 kl 11:50
-- Serverversion: 10.1.38-MariaDB
-- PHP-version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `gameon`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `grupper`
--

CREATE TABLE `grupper` (
  `GruppID` int(11) NOT NULL,
  `GruppNamn` varchar(255) COLLATE utf32_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_swedish_ci;

--
-- Dumpning av Data i tabell `grupper`
--

INSERT INTO `grupper` (`GruppID`, `GruppNamn`) VALUES
(1, 'IF Metal'),
(2, 'Rocka Sock'),
(3, 'From Software'),
(4, 'Placeholder Studios');

-- --------------------------------------------------------

--
-- Tabellstruktur `kategori`
--

CREATE TABLE `kategori` (
  `FragaID` int(11) NOT NULL,
  `Fraga` varchar(255) COLLATE utf32_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_swedish_ci;

--
-- Dumpning av Data i tabell `kategori`
--

INSERT INTO `kategori` (`FragaID`, `Fraga`) VALUES
(1, 'Designe'),
(2, 'Programering'),
(3, 'Rolighet'),
(4, 'Uppfyller Tema'),
(5, 'Spelbarhet'),
(6, 'Koppling till matte');

-- --------------------------------------------------------

--
-- Tabellstruktur `person`
--

CREATE TABLE `person` (
  `ID` int(11) NOT NULL,
  `Namn` varchar(100) COLLATE utf32_swedish_ci NOT NULL,
  `Password` varchar(100) COLLATE utf32_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_swedish_ci;

--
-- Dumpning av Data i tabell `person`
--

INSERT INTO `person` (`ID`, `Namn`, `Password`) VALUES
(0, 'Root', ''),
(1, 'Jessica', '123'),
(2, 'GW', '321'),
(3, 'Stefan', '1337'),
(4, 'Anton', 'EldenRing'),
(5, 'Mattias', 'D3g1oo00P#'),
(6, 'Pelle', 'Kalle');

-- --------------------------------------------------------

--
-- Tabellstruktur `resulutat`
--

CREATE TABLE `resulutat` (
  `GruppID` int(11) NOT NULL,
  `FrageID` int(11) NOT NULL,
  `PersonID` int(11) NOT NULL,
  `Svar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_swedish_ci;

--
-- Dumpning av Data i tabell `resulutat`
--

INSERT INTO `resulutat` (`GruppID`, `FrageID`, `PersonID`, `Svar`) VALUES
(1, 3, 1, 10),
(1, 4, 1, 5),
(1, 5, 1, 6),
(1, 2, 2, 8),
(1, 3, 2, 10),
(1, 4, 2, 1),
(1, 5, 2, 10),
(2, 4, 1, 10),
(2, 4, 5, 1),
(2, 4, 3, 5),
(2, 1, 3, 10),
(2, 2, 3, 8),
(2, 3, 3, 3),
(2, 5, 3, 1);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `grupper`
--
ALTER TABLE `grupper`
  ADD PRIMARY KEY (`GruppID`);

--
-- Index för tabell `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`FragaID`);

--
-- Index för tabell `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `grupper`
--
ALTER TABLE `grupper`
  MODIFY `GruppID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT för tabell `kategori`
--
ALTER TABLE `kategori`
  MODIFY `FragaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT för tabell `person`
--
ALTER TABLE `person`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
