<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

$_SESSION ['paginaCorr']="";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Energya Fitness Club</title>
<meta name="title" content="Energya Fitness Club"/>
<meta name="description" content="Energya - un luogo per tutti quelli che amano la palestra e vogliono sentirsi come in famiglia!"/>
<meta name="keywords" content="Energya, fitness, palestra, sport"/>
<meta name="language" content="italian it"/>
<meta name="author" content="Franconetti Simone, Infantino Matteo, Marcon Luca"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<link rel="stylesheet" type="text/css" href="../CSS/css_index.css" media="handheld, screen"/>
<link rel="stylesheet" type="text/css" href="../CSS/css_index_small_768px.css" media="handheld, screen and (max-width:768px),only screen and (max-device-width:768px)"/>
<link rel="stylesheet" type="text/css" href="../CSS/css_index_small_480px.css" media="handheld, screen and (max-width:480px),only screen and (max-device-width:480px)"/>
<link rel="stylesheet" type="text/css" href="../CSS/print.css" media="print"/>

<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>
<script type="text/javascript" src="../JS/script.js"> </script>

</head>
<body>
  <noscript>
    <span id="menuNoScript"><span xml:lang="en">Javascript</span> Disabilitato: Il <a href="#NoJS">menu</a> &egrave; visualizzabile in fondo alla pagina</span>
  </noscript>
  <div id="nav">
	  <div id="logo"><img src="../IMG/logo1.png" alt="Logo Energya"/></div>
    <button id="menuIcon" title="menuIcon" onclick="menuHamburger()" ><img src="../IMG/hamburger_icon.png" alt="menu icon"/></button>
	  <ul class="menuItems" id="menuu" >
	    <li><a href="index.php" xml:lang="en">Home</a></li>
	    <li><a href="corsi.php">Corsi</a></li>
      <li id="currentLink">Abbonamenti</li>
      <li><a href="news.php" xml:lang="en">News</a></li>
	    <li><a href="galleria.php">Galleria</a></li>
	    <li><a href="staff.php" xml:lang="en">Staff</a></li>
	    <li><a href="contatti.php">Contatti</a></li>
			<?php require_once __DIR__ . DIRECTORY_SEPARATOR . "../PHP" . DIRECTORY_SEPARATOR . "userbar_mobile.php";?>
	  </ul>
	</div>
	<div id="header">
		<img src="../IMG/logo1.png" alt="Logo Energya"/>
	</div>

	<?php require_once __DIR__ . DIRECTORY_SEPARATOR . "../PHP" . DIRECTORY_SEPARATOR . "userbar.php";
	 ?>

	<div id="content">
		<div id="breadcrumb">
			<p>Ti trovi in: <span xml:lang="en">Abbonamenti</span></p>
		</div>

		<div class="divGenerico">

			<h1> I nostri abbonamenti </h1>
			<p>All’interno del Club gli abbonati potranno usufruire dei numerosi ed
         esclusivi servizi compresi nell’ abbonamento, sentendosi così in vacanza
         ogni giorno dell’anno in completo relax:
         </p>
      <ul>
        <li>Possibilità di usufruire di tutte le sale e macchinari all'avanguardia </li>
        <li>Disponibilità di un ampio parcheggio gratuito</li>
        <li>Servizio Personal Trainer e cambio scheda</li>
        <li>Thermarium – Piscina Coperta – Terrazza Estiva</li>
      </ul>

		</div>

    <div class="Card Sx">
      <h2>Abbonamento Mensile</h2>
      <p class="bold">Costo: 60 euro</p>
      <p>Con l'abbonamento mensile sarà possibile accedere alle nostre strutture tutti i giorni della settimana
      durante gli orari indicati nella sezione "Contatti".  </p>
    </div>

    <div class="Card Dx">
      <h2>Abbonamento Trimestrale</h2>
      <p class="bold">Costo: 150 euro</p>
      <p>Con l'abbonamento trimestrale sarà possibile ottenere un'esperienza completa presso la nostra struttura risparmiando
      più del 15%! Inoltre, in omaggio per i clienti che sottoscriveranno questo abbonamento, sarà possibile ricevere in omaggio
      una ingresso presso il centro Benessere "Pincopallino" </p>
    </div>

	</div>

  <?php require_once __DIR__ . DIRECTORY_SEPARATOR . "footer.html"; ?>

  <noscript>
  	  <ul id="NoJS">
        <li><a href="index.php" xml:lang="en">Home</a></li>
  	    <li><a href="corsi.php">Corsi</a></li>
        <li>Abbonamenti</li>
        <li><a href="news.php" xml:lang="en">News</a></li>
  	    <li><a href="galleria.php">Galleria</a></li>
  	    <li><a href="staff.php" xml:lang="en">Staff</a></li>
  	    <li><a href="contatti.php">Contatti</a></li>
<<<<<<< HEAD:HTML/abbonamenti.php
        <?php include __DIR__ . DIRECTORY_SEPARATOR . "../PHP" . DIRECTORY_SEPARATOR . "userbar_mobile.php";?>
=======
        <?php include __DIR__ . DIRECTORY_SEPARATOR . "userbar_mobile.php";?>
        <?php include __DIR__ . DIRECTORY_SEPARATOR . "userbar.php";?>
>>>>>>> 16a6a108681aed5d6133df308c0ffc07a685dec5:abbonamenti.php
  	  </ul>
  </noscript>

</body>
</html>
