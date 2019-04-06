-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mar 14, 2019 alle 02:05
-- Versione del server: 10.1.37-MariaDB
-- Versione PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cosecosi`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `azienda`
--

CREATE TABLE `azienda` (
  `nome` varchar(30) COLLATE utf8_bin NOT NULL,
  `cognome` varchar(30) COLLATE utf8_bin NOT NULL,
  `codfiscale` varchar(16) COLLATE utf8_bin NOT NULL,
  `piva` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struttura della tabella `commerciale`
--

CREATE TABLE `commerciale` (
  `nome` varchar(30) COLLATE utf8_bin NOT NULL,
  `cognome` varchar(30) COLLATE utf8_bin NOT NULL,
  `codfiscale` varchar(16) COLLATE utf8_bin NOT NULL,
  `pec` varchar(30) COLLATE utf8_bin NOT NULL,
  `username` varchar(30) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `commerciale`
--

INSERT INTO `commerciale` (`nome`, `cognome`, `codfiscale`, `pec`, `username`, `password`) VALUES
('Luigi', 'Minauda', 'MNDLGU00D08F839D', 'LuigiMinauda@pec.it', 'Gimotto', 'root');

-- --------------------------------------------------------

--
-- Struttura della tabella `privato`
--

CREATE TABLE `privato` (
  `nome` varchar(30) COLLATE utf8_bin NOT NULL,
  `cognome` varchar(30) COLLATE utf8_bin NOT NULL,
  `codfiscale` varchar(16) COLLATE utf8_bin NOT NULL,
  `username` varchar(30) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `azienda`
--
ALTER TABLE `azienda`
  ADD PRIMARY KEY (`codfiscale`,`piva`);

--
-- Indici per le tabelle `commerciale`
--
ALTER TABLE `commerciale`
  ADD PRIMARY KEY (`codfiscale`,`pec`);

--
-- Indici per le tabelle `privato`
--
ALTER TABLE `privato`
  ADD PRIMARY KEY (`codfiscale`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
