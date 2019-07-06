-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Lug 04, 2019 alle 17:18
-- Versione del server: 10.1.40-MariaDB
-- Versione PHP: 7.3.5

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
(37, 'FitBoxe', 'Se sei stressato e hai voglia di sfogare la tensione della giornata &egrave; l\'allenamento perfetto. ', '../IMG/FitBoxe2.png', 'Se sei stressato e hai voglia di sfogare la tensione della giornata &egrave; l\'allenamento perfetto. Un esercizio che combina CARDIO e TONO, assemblando PUGNI, CALCI E GOMITATE a ritmo di musica, perfetto per uomini, donne, grandi e piccini. Un allenamento straordinario che rafforza il corpo e svuota la mente!', 'Logo FitBoxe', '19:00:00', 'lunedi'),
(38, 'G.A.G.', 'Un allenamento su base musicale molto amato, semplice da seguire, adatto a tutte le et&agrave; e tutte le esigenze.', '../IMG/gag2.png', 'Il nostro <abbr title=\"Gambe Addominali Glutei\"> G.A.G.</abbr> , ovvero Gambe Addominali e Glutei (e non solo) &egrave; un allenamento su base musicale molto amato, semplice da seguire, adatto a tutte le et&agrave; e tutte le esigenze. Attraverso l\'utilizzo di piccoli attrezzi come <span xml:lang=\"en\">fitball</span>, elastici e <span xml:lang=\"en\">slowfit</span> permette di tonificare le zone critiche. Il nostro obiettivo? RASSODARE e TONIFICARE con il SORRISO!', 'Logo GAG', '19:30:00', 'martedi'),
(39, 'POUND', 'Bacchette da batterista alla mano e musica a tutto volume, il nuovo <span xml:lang=\"en\">workout</span> che permette di rassodare e bruciare calorie simulando il <span xml:lang=\"en\">DRUMMING</span> dei batteristi.', '../IMG/pound2.png', 'Si tratta di una delle novit&agrave; del mondo del <span xml:lang=\"en\">fitness</span>, direttamente dagli Stati Uniti e approvato da Madonna! Lo abbiamo collaudato anche noi ed &egrave; IRRESISTIBILE! bacchette da batterista alla mano e musica a tutto volume, il <span xml:lang=\"en\">POUND</span> &egrave; il nuovo <span xml:lang=\"en\">workout</span> che permette di rassodare e bruciare calorie simulando il <span xml:lang=\"en\">DRUMMING</span> dei batteristi. Quando comincia la musica non potrai pi&ugrave; fermarti, fare centinaia di <span xml:lang=\"en\">SQUAT</span> e AFFONDI non ha mai avuto questo RITMO! Ti basta lo spirito da <span xml:lang=\"en\">ROCKSTAR</span> e il DIVERTIMENTO &egrave; assicurato!', 'Logo POUND', '20:00:00', 'mercoledi'),
(40, 'FUNKTIONAL', 'Un <span xml:lang=\"en\">workout</span> UNICO, pensato per chi vuole trovare il giusto MIX tra il lavoro cardio-coreografico (<span xml:lang=\"en\">FUNK</span>) e l\'allenamento funzionale (<span xml:lang=\"en\">FUNCTIONAL</span>)', '../IMG/FunkTional2.png', 'Il solo e l\'unico: <span xml:lang=\"en\">FUNKTIONAL</span> &egrave; un <span xml:lang=\"en\">workout</span> UNICO, pensato per chi vuole trovare il giusto MIX tra il lavoro cardio-coreografico (<span xml:lang=\"en\">FUNK</span>) e l\'allenamento funzionale (<span xml:lang=\"en\">FUNCTIONAL</span>): un accostamento super <span xml:lang=\"en\">FUN</span>! Con le nostre divertentissime coreografie puoi tonificare e rassodare attraverso un intenso lavoro <span xml:lang=\"en\">TOTAL BODY</span> e goderti qualche passo di danza, ovviamente a RITMO DI MUSICA! ', 'Logo FUNKTIONAL', '19:30:00', 'giovedi'),
(41, 'Step &amp; Total Body', 'Per le vere amanti dello <span xml:lang=\"en\">STEP</span>, l\'immancabile corso di <span xml:lang=\"en\">STEP &amp; TOTAL BODY</span>.', '../IMG/step2.png', 'Per le vere amanti dello <span xml:lang=\"en\">STEP</span>, l\'immancabile corso di <span xml:lang=\"en\">STEP &amp; TOTAL BODY</span>. Un allenamento indicato per tutti coloro che amano il <span xml:lang=\"en\">fitness</span> e che desiderano praticare una combinazione tra allenamento di RESISTENZA e FORZA, a tempo di musica!', 'Logo Step', '19:00:00', 'venerdi'),
(42, 'Smart Toning', 'Il corso di tonificazione per chi ama avere ottimi risultati con il minimo sforzo', '../IMG/smarttoning2.png', 'Il corso di tonificazione per chi ama avere ottimi risultati con il minimo sforzo, abbina un allenamento mirato e intelligente con affondi, <span xml:lang=\"en\">squat</span>, addominali e piegamenti alla dinamicit&agrave; dell\'attivit&agrave; con base musicale. Particolarmente indicato per persone sedentarie che sentono il bisogno di mettere in moto i propri muscoli.', 'Logo Smart Toning', '18:15:00', 'mercoledi'),
(43, 'Ginnastica Dolce', 'Questo corso &egrave; particolarmente indicato per chi vuole continuare a mantenersi in forma senza dover strafare.', '../IMG/ginnasticadolce2.png', 'Questo corso &egrave; dedicato alle persone della terza et&agrave;, dove si svolgono una serie di esercizi dedicati all\'allungamento muscolare e al rafforzamento posturale, particolarmente indicato per chi vuole continuare a mantenersi in forma senza dover strafare. La particolare cura dei circuiti di allenamento garantisce che i muscoli mantengano la loro integrit&agrave; e diano sostegno in tutti i momenti della giornata. Inoltre questo corso prevede delle sessioni apposite per persone che si sono sottoposte a interventi chirurgici e desiderano recuperare con calma dall\'infortunio', 'Logo Ginnastica', '10:00:00', 'venerdi');

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
('../IMG/7519.jpg', 14, 'Scorcio sala pesi', 'Vista dall\'alto sala pesi'),
('../IMG/7762.jpg', 15, 'Scorcio sala cardio', 'Vista dall\'alto sala cardio'),
('../IMG/7764.jpg', 16, 'Macchinari cardio', 'Dettaglio dei macchinari cardio'),
('../IMG/7766.jpg', 17, 'Sala pesi', 'Prospettiva della sala pesi'),
('../IMG/7787.jpg', 18, 'Soffitto con lampade', 'Dettaglio del soffitto in una sala corsi'),
('../IMG/7799.jpg', 19, 'sacchi fitboxe', 'Sacchi per il corso di FitBoxe'),
('../IMG/7814.jpg', 20, 'terrazza con sdraio', 'Terrazza estiva'),
('../IMG/7840.jpg', 21, 'step e bicicletta', 'Particolare di step e bicicletta');

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
('../IMG/autunno.jpg', 14, 'Post motivazionale', 'Le previsioni non promettono bene, la tua voglia di allenarti si.', '2019-07-03 13:31:45', 'Donna con scarpe'),
('../IMG/volantino smart toning.png', 15, 'Comincia un nuovo corso!', 'CONFERMATO! Dal 10 ottobre comincia un nuovo corso di tonificazione! Ogni MERCOLED&igrave; e VENERD&igrave; dalle 18.15 <span xml:lang=\"en\">SMART TONING</span>: Vi aspettiamo!', '2019-07-03 13:38:24', 'volantino'),
('../IMG/inizio smart toning.jpg', 16, 'Vi aspettiamo al nuovo corso!', 'MercoledÃ¬ 10 comincia il nuovo corso <span xml:lang=\"en\">SMART TONING</span>, Ore 18:15! Vi aspettiamo!', '2019-07-03 13:40:40', 'Donna allenata'),
('../IMG/halloween.jpg', 17, 'NovitÃ  per halloween', 'Aggiornamento orari della settimana:<ul><li>mercoled&igrave; 31 ottobre (prefestivo) chiusura ore 21:00</li><li>gioved&igrave; 1 novembre (festivo) la palestra rimarr&agrave; chiusa</li><li>Venerd&igrave; e sabato la palestra sar&agrave; aperta con gli orari regolari</li><ul>', '2019-07-03 13:50:43', 'zucca halloween'),
('../IMG/natale.jpg', 18, 'Buon Natale!', 'Come anticipato, la palestra resta aperta anche durante il periodo natalizio. Piccole variazioni riguardanti solo i giorni pre-festivi e festivi.', '2019-07-03 13:53:31', 'Biglietto auguri'),
('../IMG/capodanno.jpg', 19, 'Pronti per capodanno', 'Buoni propositi per l\'anno nuovo: rimettersi in forma con Energya <span xml:lang=\"en\">club</span>! Ti aspettiamo.', '2019-07-03 13:55:53', 'fuochi artificio');

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
  MODIFY `corsi_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT per la tabella `galleria`
--
ALTER TABLE `galleria`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT per la tabella `news`
--
ALTER TABLE `news`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT per la tabella `prenotazioni`
--
ALTER TABLE `prenotazioni`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
