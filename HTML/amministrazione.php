<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
if (!isset($_SESSION["successo"]))
  $_SESSION["successo"]=0;

$_SESSION ['paginaCorr']="amministrazione";

if ((!isset($_SESSION["email"]))||($_SESSION["email"]!="admin@admin.it")){
	header("Location: pagina_errore_accesso.php");
	exit();
}
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
    <button id="menuIcon" title="menuIcon" onclick="menuHamburger()" ><img src="../IMG/hamburger_icon.png" alt="icona menu"/></button>
	  <ul class="menuItems" id="menuu" >
	    <li><a href="index.php" xml:lang="en">Home</a></li>
	    <li><a href="corsi.php">Corsi</a></li>
			<li><a href="abbonamenti.php">Abbonamenti</a></li>
			<li><a href="news.php">News</a></li>
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
			<p>Ti trovi in: Pannello di amministrazione</p>
		</div>

		<div class="divGenerico">
			<h1>Pannello di amministrazione</h1>
			<p>Dal pannello di amministrazione è possibile inserire, modificare e rimuovere
			i contenuti che verranno visualizzati all'interno del sito <abbr xml:lang="en" title="World Wide Web">web</abbr></p>
      <?php
      if (isset($_SESSION['successo']) && $_SESSION ['successo']){
        echo "<h2 class=\"successo\">Inserimento avvenuto con successo</h1>";
        $_SESSION ['successo']=0;
      }
      else{
        echo "<p></p>";
      }
      ?>
      <ul>
				<li><a href="corsi_form.php">Pagina inserimento corsi</a></li>
				<li><a href="news_form.php">Pagina inserimento news</a></li>
				<li><a href="galleria_form.php">Pagina inserimento galleria</a></li>
        <li><a href="remove_modifica_corsi.php">Pagina rimozione e modifica corsi</a></li>
				<li><a href="remove_galleria.php">Pagina rimozione galleria</a></li>
        <li><a href="remove_modifica_news.php">Pagina rimozione e modifica <span xml:lang="en">news</span></a></li>
			</ul>
		</div>
	</div>

  <?php require_once __DIR__ . DIRECTORY_SEPARATOR . "footer.html"; ?>

  <noscript>
  	  <ul id="NoJS">
        <li><a href="index.php" xml:lang="en">Home</a></li>
  	    <li><a href="corsi.php">Corsi</a></li>
  			<li><a href="abbonamenti.php">Abbonamenti</a></li>
  			<li><a href="news.php">News</a></li>
  	    <li><a href="galleria.php">Galleria</a></li>
  	    <li><a href="staff.php" xml:lang="en">Staff</a></li>
  	    <li><a href="contatti.php">Contatti</a></li>
<<<<<<< HEAD:HTML/amministrazione.php
        <?php include __DIR__ . DIRECTORY_SEPARATOR . "../PHP" . DIRECTORY_SEPARATOR . "userbar_mobile.php";?>
=======
        <?php include __DIR__ . DIRECTORY_SEPARATOR . "userbar_mobile.php";?>
        <?php include __DIR__ . DIRECTORY_SEPARATOR . "userbar.php";?>
>>>>>>> 16a6a108681aed5d6133df308c0ffc07a685dec5:amministrazione.php
  	  </ul>
  </noscript>

  </body>
</html>
