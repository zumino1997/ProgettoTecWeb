-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Creato il: Giu 05, 2019 alle 16:26
-- Versione del server: 5.6.34-log
-- Versione PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `anagrafica`
--

CREATE TABLE `anagrafica` (
  `nome` varchar(30) NOT NULL,
  `cognome` varchar(30) NOT NULL,
  `citta` varchar(20) NOT NULL,
  `indirizzo` varchar(30) NOT NULL,
  `nascita` date NOT NULL,
  `mail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `anagrafica`
--

INSERT INTO `anagrafica` (`nome`, `cognome`, `citta`, `indirizzo`, `nascita`, `mail`) VALUES
('', '', '', 'asdcsdac', '0000-00-00', ''),
('andrea', 'franconetti', 'Treviso', 'vicolo 4 novembre, 13', '1997-12-12', 'a.franconetti@libero.it'),
('andrea', 'franconetti', 'Treviso', 'vicolo 4 novembre, 13', '1970-01-01', 'a.franconetti@libero.itop'),
('andrea', 'franconetti', 'Treviso', 'vicolo 4 novembre, 13', '1997-12-12', 'a.franconetti@libero.itu'),
('werfwer', 'sadf', 'werweqr', 'sdfasdf', '1997-12-12', 'a@a.it'),
('Admin', 'Admin', 'Padova', 'Via Paolotti', '0000-00-00', 'admin@admin.it'),
('qwefweqf', 'weqdwqed', 'weqdqwed', 'qwedweqd', '0000-00-00', 'asdcdadsaccsdaasdcacd@sadcsdac'),
('sksdafkjds', 'asdcsdac', 'asdccda', 'asdcasdc', '0000-00-00', 'asdcsadcasdc@ooeei.it'),
('dsacsadc', 'sadcsdac', 'asdcdasc', 'sdacdasc', '0000-00-00', 'asdcsdac@pqwpoepo.it'),
('ascdsda', 'asdcdsac', 'asdcsdac', 'asdcsdac', '0000-00-00', 'asdcsdacasdc@sadjasdc.it'),
('asdcsdac', 'sadcsdac', 'asdcsdac', 'Vicolo 4 Novembre, 13', '0000-00-00', 'asdcssdacsdacsdac@libero.it'),
('fsdmvdfsmvmdf', 'sdfvfd', 'dfsv', 'dfsvfdsv', '0000-00-00', 'fsvddsfv@lsvdfpl.it'),
('asdcwqeawe', 'qwed', 'qwed', 'weqd', '0000-00-00', 'qwedwwed@sdjck.it'),
('Loredana', 'Pellegrino', 'Treviso', 'vicolo 4 novembre, 13', '1997-12-12', 'simone.franconetti@libero.it'),
('Simone', 'Franconetti', 'Treviso', 'Vicolo 4 Novembre, 13', '1997-12-12', 'simone.franconetti@libero.itwq'),
('Simone', 'Franconetti', '1123', 'Vicolo 4 Novembre, 13', '0000-00-00', 'z@z.it'),
('Simone', 'Franconetti', 'kasdc', 'Vicolo 4 Novembre, 13', '0000-00-00', 'zumino19934@libero.it'),
('Simone', 'wref', 'Treviso', 'Vicolo 4 Novembre, 13', '0000-00-00', 'zumino1997010101@libero.it'),
('Simone', 'Franconetti', 'Treviso', 'Vicolo 4 Novembre, 13', '0000-00-00', 'zumino19972718217@libero.it'),
('Simone', 'Franconetti', 'Treviso', 'Vicolo 4 Novembre, 13', '0000-00-00', 'zumino1997766@libero.it'),
('sdacasd', 'asdcsadc', 'asdcasdc', 'Vicolo 4 Novembre, 13', '1991-12-12', 'zumino1997@libero.it'),
('Simone', 'Franconetti', 'Treviso', 'Vicolo 4 Novembre, 13', '0000-00-00', 'zumino1997@libero.it0202'),
('Simone', 'Franconetti', 'Treviso', 'Vicolo 4 Novembre, 13', '0000-00-00', 'zumino1997@libero.it213123123'),
('Simone', 'Franconetti', 'Treviso', 'Vicolo 4 Novembre, 13', '0000-00-00', 'zumino1997@libero.it343'),
('Simone', 'Franconetti', 'Treviso', 'Vicolo 4 Novembre, 13', '0000-00-00', 'zumino1997@libero.itdsac'),
('arfsd', 'sadf', 'sadfsadf', 'sdafassdf', '1997-12-12', 'zumino1997@libero.itsdafsdaf'),
('Simone', 'Franconetti', 'Treviso', 'Vicolo 4 Novembre, 13', '0000-00-00', 'zumino1997@libero.itsdc'),
('Simone', 'Franconetti', 'Treviso', 'Vicolo 4 Novembre, 13', '0000-00-00', 'zumino1997@libero.itundsnfn'),
('Simone', 'Franconetti', 'Treviso', 'Vicolo 4 Novembre, 13', '0000-00-00', 'zumino1997aklsdjkdaskljdsdad@l'),
('Simone', 'Franconetti', 'Treviso', 'Vicolo 4 Novembre, 13', '0000-00-00', 'zumino1997cal@libero.it'),
('Simone', 'Franconetti', 'Treviso', 'Vicolo 4 Novembre, 13', '0000-00-00', 'zumino199dfcsdfvs7@libero.it'),
('Simone', 'Franconetti', 'Treviso', 'Vicolo 4 Novembre, 13', '0000-00-00', 'zumino199skdlfjlkkjasdfklkljsd');

-- --------------------------------------------------------

--
-- Struttura della tabella `corsi`
--

CREATE TABLE `corsi` (
  `corsi_id` int(7) NOT NULL,
  `titolo` varchar(100) NOT NULL,
  `descrizione` varchar(800) NOT NULL,
  `immagine` varchar(200) NOT NULL,
  `descrizione_long` varchar(2000) NOT NULL,
  `alt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `corsi`
--

INSERT INTO `corsi` (`corsi_id`, `titolo`, `descrizione`, `immagine`, `descrizione_long`, `alt`) VALUES
(25, 'fdsvfsd', 'sdfvklsdvffdvsjklfdjklfsjklfdvjklfdsjklsfddfssdfsvsdjvfjvksdfkjjkdfsvjksdfvjksdfjkdsfjkjkdfsvjkdsfjkvjkdfsvjkdfsjkvdfkjsvjkdfsjkv', 'IMG/grano_rieti.jpg', 'sdfvnfdsklvnmsdfvjkkdkkdkdkkdkdkkdkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', '');

-- --------------------------------------------------------

--
-- Struttura della tabella `galleria`
--

CREATE TABLE `galleria` (
  `immagine` varchar(200) NOT NULL,
  `id` int(7) NOT NULL,
  `alt` varchar(30) NOT NULL,
  `didascalia` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `galleria`
--

INSERT INTO `galleria` (`immagine`, `id`, `alt`, `didascalia`) VALUES
('', 4, '', ''),
('', 5, 'sd', 'fdvsdfv'),
('', 6, 'mxnasmnnm', 'fdvsdfv'),
('IMG/chi-today-tomorrow.jpg', 7, 'kjkdkjdjkjkdjkdjkdjkdjk', 'sadcasdcasdca');

-- --------------------------------------------------------

--
-- Struttura della tabella `news`
--

CREATE TABLE `news` (
  `immagine` varchar(200) NOT NULL,
  `id` int(8) NOT NULL,
  `titolo` varchar(50) NOT NULL,
  `testo` varchar(1000) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `alt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `news`
--

INSERT INTO `news` (`immagine`, `id`, `titolo`, `testo`, `data`, `alt`) VALUES
('IMG/foto1.jpg', 8, 'News 1', 'boiaboiaboiaboiaboiaboiaboiaboiaboiaboiaboiaboia', '2019-06-05 14:17:22', ''),
('IMG/grano_gentil_rosso.jpg', 9, 'News 3', 'foto kickboxingfoto kickboxingfoto kickboxingfoto kickboxingfoto kickboxingfoto kickboxingfoto kickboxingfoto kickboxingfoto kickboxingfoto kickboxingfoto kickboxingfoto kickboxing', '2019-05-31 07:22:22', 'foto kickboxing');

-- --------------------------------------------------------

--
-- Struttura della tabella `prenotazioni`
--

CREATE TABLE `prenotazioni` (
  `corso` varchar(200) NOT NULL,
  `data` date NOT NULL,
  `ora` time NOT NULL,
  `id` int(8) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `mail` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`mail`, `password`) VALUES
('admin@admin.it', '25d55ad283aa400af464c76d713c07ad'),
('zumino1997@libero.it', '25d55ad283aa400af464c76d713c07ad'),
('zumino1997@libero.itsdc', '81dc9bdb52d04dc20036dbd8313ed055'),
('zumino1997@libero.itundsnfn', '81dc9bdb52d04dc20036dbd8313ed055'),
('zumino1997aklsdjkdaskljdsdad@l', '25d55ad283aa400af464c76d713c07ad'),
('zumino1997cal@libero.it', '81dc9bdb52d04dc20036dbd8313ed055'),
('zumino199dfcsdfvs7@libero.it', '81dc9bdb52d04dc20036dbd8313ed055'),
('zumino199skdlfjlkkjasdfklkljsd', '25d55ad283aa400af464c76d713c07ad');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `anagrafica`
--
ALTER TABLE `anagrafica`
  ADD PRIMARY KEY (`mail`);

--
-- Indici per le tabelle `corsi`
--
ALTER TABLE `corsi`
  ADD PRIMARY KEY (`corsi_id`);

--
-- Indici per le tabelle `galleria`
--
ALTER TABLE `galleria`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `prenotazioni`
--
ALTER TABLE `prenotazioni`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`mail`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `corsi`
--
ALTER TABLE `corsi`
  MODIFY `corsi_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT per la tabella `galleria`
--
ALTER TABLE `galleria`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT per la tabella `news`
--
ALTER TABLE `news`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
