<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

$_SESSION ['paginaCorr']="";

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Energya Fitness Club</title>
<meta name="title" content="Energya Fitness Club"/>
<meta name="description" content="Energya - un luogo per tutti quelli che amano la palestra e vogliono sentirsi come in famiglia!"/>
<meta name="keywords" content="Energya, fitness, palestra, sport"/>
<meta name="language" content="italian it"/>
<meta name="author" content="Franconetti Simone, Infantino Matteo, Marcon Luca"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">



<link rel="stylesheet" type="text/css" href="CSS/css_index.css" media="handheld, screen"/>
<link rel="stylesheet" type="text/css" href="CSS/css_index_small_768px.css" media="handheld, screen and (max-width:768px),only screen and (max-device-width:768px)"/>
<link rel="stylesheet" type="text/css" href="CSS/css_index_small_480px.css" media="handheld, screen and (max-width:480px),only screen and (max-device-width:480px)"/>
<link rel="stylesheet" type="text/css" href="CSS/print.css" media="print"/>


<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>
<script type="text/javascript" src="JS/script.js"> </script>


</head>
<body>

	<div id="nav">
	  <div id="logo"><img src="IMG/logo1.png" alt="Logo Energya"/></div>
    <button id="menuIcon" onclick="menuHamburger()" aria-label="menu icon"><img src="IMG/hamburger_icon.png" alt="icona menu"/></button>
	  <ul class="menuItems" id="menuu" >
			<li><a href="index.php" xml:lang="en">Home</a></li>
	    <li><a href="corsi.php">Corsi</a></li>
			<li><a href="abbonamenti.php">Abbonamenti</a></li>
			<li><a href="news.php">News</a></li>
			<li><a href="galleria.php">Galleria</a></li>
	    <li><a href="staff.php" xml:lang="en">Staff</a></li>
			<li id="currentLink">Contatti</li>
			<?php require_once __DIR__ . DIRECTORY_SEPARATOR . "userbar_mobile.php";?>
	  </ul>
	</div>
	<div id="header">
		<img src="IMG/logo1.png" alt=""/>
	</div>

	<?php require_once __DIR__ . DIRECTORY_SEPARATOR . "userbar.php";
	 ?>

	<div id="content">
		<div id="breadcrumb">
			<p>Ti trovi in: <span xml:lang="en">Contatti</span></p>
		</div>

		<div id="contatti">
			<h1>Contatti</h1>
			<h2>Indirizzo</h2>
			<p>Via Bassanese Coste, 156</p>
			<p>31010 Maser, <span xml:abbr title="World Wide Web">TV</abbr></p>
			<p>Italia</p>
			<h2>Recapiti</h2>
			<p>Telefono: 0423 565453</p>
			<p>Cellulare: 347 1234567</p>
			<h2>I nostri orari</h2>
			<p>Lunedi - Venerdi: 10:00 - 20:00</p>
			<a id="screenReader" href="#nav">Salta la mappa</a>
		</div>

		<div id="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11125.410647175351!2d11.96207182468705!3d45.80419511892312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf23f8f3d6e477cad!2sEnergya+Fitness+Club!5e0!3m2!1sit!2sit!4v1545300300095" ></iframe>
		</div>

		<div class="divGenerico evidenza clearfix">
			<h1>Come trovarci</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor rhoncus posuere. Integer pellentesque eu nulla eu elementum. Vestibulum molestie risus eu nisl rhoncus suscipit. Aliquam nisi orci, feugiat sit amet nulla in, sodales interdum mi.</p>
		</div>

	</div>

  <?php require_once __DIR__ . DIRECTORY_SEPARATOR . "footer.html"; ?>

</body>
</html>
