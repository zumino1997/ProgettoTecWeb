-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Creato il: Giu 27, 2019 alle 11:57
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
('Simone', 'Franconetti', 'Treviso', 'Vicolo 4 Novembre, 13', '1991-12-12', 'blablabla@libero.it'),
('fsdmvdfsmvmdf', 'sdfvfd', 'dfsv', 'dfsvfdsv', '0000-00-00', 'fsvddsfv@lsvdfpl.it'),
('Luca', 'Gava', 'Padova', 'Via Paolotti', '1991-12-12', 'lucagava1232@gmail.com'),
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
('Simone', 'Franconetti', 'Treviso', 'Vicolo 4 Novembre, 13', '1991-02-26', 'zumino1997mvfdjklsdfldfvdvfsjk'),
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
  `alt` varchar(20) NOT NULL,
  `ora` time NOT NULL,
  `giorno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `corsi`
--

INSERT INTO `corsi` (`corsi_id`, `titolo`, `descrizione`, `immagine`, `descrizione_long`, `alt`, `ora`, `giorno`) VALUES
(28, 'Prova 2', 'asdcadscasdasdcsadcasdcasdcasdcadscasdasdcsadcasdcasdcasdcadscasdasdcsadcasdcasdc', 'IMG/grano_triticum_dicoccum.jpg', 'asdcadscasdasdcsadcasdcasdcasdcadscasdasdcsadcasdcasdc', '', '00:00:00', ''),
(29, 'Prova 77', 'slkdckslkcdkjscjksjkcjkdjkcskjdckkdjcjksdkjckjd', 'IMG/grano_gentil_rosso.jpg', 'dfvksdfvksdfvjksdfvsjkdfvjksfdkvksdsdnsdcsnmdcnmsdcsdmncnsdmcnmsdcmnsdc', '', '00:00:00', ''),
(31, 'Corso Funktional', 'blabla blabla blabla blablablablablabla blabla blabla blabla blabla blabla', 'IMG/teseo_arianna.jpg', 'blabla blabla blabla blabla blablablabla blabla blabla blabla blabla blabla blabla blabla ', '', '00:00:00', ''),
(32, 'Corso ginnastica', 'perperpep perperpep perperpep perperpep perperpep perperpep perperpep perperpepperperpepperperpep', 'IMG/logo-fdarianna.png', ' perperpepperperpepperperpep perperpepperperpepperperpep perperpep perperpepperperpep perperpep perperpep perperpep perperpepperperpep', '', '00:00:00', ''),
(33, 'Corso ginnastica', 'perperpep perperpep perperpep perperpep perperpep perperpep perperpep perperpepperperpepperperpep', 'IMG/depositphotos_34181693-stock-photo-red-thread-broken.jpg', ' perperpepperperpepperperpep perperpepperperpepperperpep perperpep perperpepperperpep perperpep perperpep perperpep perperpepperperpep', '', '00:00:00', ''),
(34, 'Corso a caso', 'Corso a casoCorso a casoCorso a casoCorso a casoCorso a casoCorso a casoCorso a casoCorso a caso', 'IMG/depositphotos_34181693-stock-photo-red-thread-broken.jpg', 'Corso a casoCorso a casoCorso a casoCorso a casoCorso a casoCorso a casoCorso a casoCorso a casoCorso a caso', '', '00:00:00', ''),
(35, 'Corso prova', 'ciao ciao ciao ciao ciao ciao ciao ciao ciao ciao ciao ciao ciao ciaociao ciaociao ciao ciao ciao ', 'IMG/filo.jpg', 'ciao ciao ciao ciao ciao ciao ciao ciao ciao ciao ciao ciao ciao ciao ', '', '11:30:00', 'domenica');

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
('IMG/chi-today-tomorrow.jpg', 7, 'kjkdkjdjkjkdjkdjkdjkdjk', 'sadcasdcasdca'),
('IMG/grano_triticum_dicoccum.jpg', 8, 'sdjcnsdncmnsdcmsdncsdmndmscm', 'dskfds'),
('blabla', 10, 'blabla', 'blabla'),
('IMG/grano_triticum_dicoccum.jpg', 11, '', 'kzamakz'),
('IMG/landini_7_230_dt.jpg', 12, '', 'kjksxkjsjkx'),
('IMG/grano_solina.jpg', 13, '', 'slkdcksl');

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
('IMG/filo.jpg', 11, 'Prova News', 'sdfvsdfv sdfvsdfvsdfvsd sdfv sdfvsd fvsdf v sdfv dfs v sdfv svsdf vdsvf', '2019-06-07 16:55:44', ''),
('IMG/filo.jpg', 12, 'Prova 2', 'asdcsadcasdc asdc sa cdsa dc sadcasdcdsacasdc asdc asdcasdcasdc asdcasdcasdc asds', '2019-06-07 17:00:24', '');

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

--
-- Dump dei dati per la tabella `prenotazioni`
--

INSERT INTO `prenotazioni` (`corso`, `data`, `ora`, `id`, `email`) VALUES
('Prova 2', '2019-06-10', '11:11:00', 8, 'lucagava1232@gmail.com');

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
('blablabla@libero.it', '25d55ad283aa400af464c76d713c07ad'),
('lucagava1232@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
('zumino1997@libero.it', '25d55ad283aa400af464c76d713c07ad'),
('zumino1997@libero.itsdc', '81dc9bdb52d04dc20036dbd8313ed055'),
('zumino1997@libero.itundsnfn', '81dc9bdb52d04dc20036dbd8313ed055'),
('zumino1997aklsdjkdaskljdsdad@l', '25d55ad283aa400af464c76d713c07ad'),
('zumino1997cal@libero.it', '81dc9bdb52d04dc20036dbd8313ed055'),
('zumino1997mvfdjklsdfldfvdvfsjksjkldf@libero.it', '25d55ad283aa400af464c76d713c07ad'),
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
  MODIFY `corsi_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT per la tabella `galleria`
--
ALTER TABLE `galleria`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT per la tabella `news`
--
ALTER TABLE `news`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT per la tabella `prenotazioni`
--
ALTER TABLE `prenotazioni`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
