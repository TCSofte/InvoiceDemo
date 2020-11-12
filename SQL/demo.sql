-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Nov 12, 2020 alle 04:57
-- Versione del server: 10.4.14-MariaDB
-- Versione PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `invoice`
--

CREATE TABLE `invoice` (
  `Id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Number` int(11) NOT NULL,
  `CustomerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `invoice`
--

INSERT INTO `invoice` (`Id`, `Date`, `Number`, `CustomerId`) VALUES
(6, '2020-11-12', 11, 1111),
(15, '2015-01-01', 1, 2),
(16, '2018-01-01', 4, 1),
(17, '2018-01-01', 4, 1),
(18, '2022-01-01', 5, 3),
(19, '2019-01-01', 1, 3),
(20, '2021-01-01', 1, 3),
(21, '2015-01-01', 3, 7);

-- --------------------------------------------------------

--
-- Struttura della tabella `invoice_field`
--

CREATE TABLE `invoice_field` (
  `Id` int(11) NOT NULL,
  `InvoiceId` int(11) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Amount` decimal(10,0) NOT NULL,
  `VatAmount` decimal(10,0) NOT NULL,
  `TotalVat` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `invoice_field`
--

INSERT INTO `invoice_field` (`Id`, `InvoiceId`, `Description`, `Quantity`, `Amount`, `VatAmount`, `TotalVat`) VALUES
(4, 15, 'ggggggggggg', 1, '76', '0', '77'),
(5, 17, 'ggggggggggg', 1, '7', '0', '4'),
(6, 17, 'hhhhh', 3, '76', '0', '4'),
(7, 21, 'cocaina', 3, '76', '0', '87'),
(8, 21, 'oppio', 1, '7', '0', '4'),
(9, 21, 'lsd', 3, '78', '0', '87'),
(10, 19, 'cera', 3, '8', '0', '4'),
(11, 16, 'ggggggggggg', 2, '9', '0', '87'),
(12, 6, 'ggggggggggg', 1, '76', '0', '4'),
(13, 6, 'ggggggggggg', 1, '76', '0', '4'),
(14, 6, 'ggggggggggg', 1, '76', '0', '4'),
(15, 6, 'jkh', 6, '9', '0', '87'),
(16, 20, 'bbbbbbbbb', 1, '7', '0', '4');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`Id`);

--
-- Indici per le tabelle `invoice_field`
--
ALTER TABLE `invoice_field`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `InvoiceId` (`InvoiceId`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `invoice`
--
ALTER TABLE `invoice`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT per la tabella `invoice_field`
--
ALTER TABLE `invoice_field`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `invoice_field`
--
ALTER TABLE `invoice_field`
  ADD CONSTRAINT `invoice_field_ibfk_1` FOREIGN KEY (`InvoiceId`) REFERENCES `invoice` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
