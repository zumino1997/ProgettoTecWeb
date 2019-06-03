<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

require_once __DIR__ . DIRECTORY_SEPARATOR . "connection.php";
use DB\DBConnection;

$connection = new DBConnection();
$dbOpen=$connection->openConnection();

$_SESSION["error"] = "";

if ($dbOpen){
    $corso=$connection->getCorso();
	}
else {
		$_SESSION["error"] = "Connessione non stabilita correttamente";
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it"><!-- il comando html permette di importare un namespace, contenente tutto l'insieme dei tag utilizzabili -->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <!--metatag che permette di dire che cosa ci sara' all'interno della pagina. Consiglio e' sempre quello di utilizzare la codifica utf-8 perche' e' univoco per la codifica degli accenti-->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Freestyle</title>
<meta name="title" content="Freestyle"/>
<meta name="description" content=""/>
<meta name="keywords" content="Freestyle, nuoto, piscina, sport, hydrobike, acquagym, pallanuoto"/>
<meta name="language" content="italian it"/>
<meta name="author" content="Franconetti Simone"/>

<link rel="stylesheet" type="text/css" href="CSS/css_index.css" media="handheld, screen"/>
<link rel="stylesheet" type="text/css" href="CSS/css_index_small_1200px.css" media="handheld, screen and (max-width:1200px),only screen and (max-device-width:1200px)"/>
<link rel="stylesheet" type="text/css" href="CSS/css_index_small_720px.css" media="handheld, screen and (max-width:768px),only screen and (max-device-width:768px)"/>
<link rel="stylesheet" type="text/css" href="CSS/css_index_small_480px.css" media="handheld, screen and (max-width:480px),only screen and (max-device-width:480px)"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css'>


<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>
<script type="text/javascript" src="JS/script.js"> </script>


</head>
<body>

	<div id="nav">
		<div id="logo"><img src="IMG/logo2.png" alt="Logo Energya"/></div>
    <button id="menuIcon" onclick="menuHamburger()"><i class='fas fa-bars'></i></button>
	  <ul class="menuItems" id="menuu" >
			<li xml:lang="en"><a href="index.php">Home</a></li>
			<li><a href="corsi.php">Corsi</a></li>
      <li><a href="galleria.php">Galleria</a></li>
			<li><a href="staff.php" xml:lang="en">Staff</a></li>
			<li><a href="contatti.php">Contatti</a></li>
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
			<p>Ti trovi in: Corsi > <?php echo $corso['Titolo']; ?> </p>
		</div>

  	<h1 class="center"><?php echo $corso['Titolo']; ?></h1>

  	<?php
      echo '<div class="divGenerico center">';
      echo '<img src="'.$corso['Immagine'].'" alt="'.$corso['Alt'].'"/>';
      echo '<p>'.$corso['DescrizioneL'].'</p>';
      echo '</div>';
    ?>

		</div>
</div>

<div id="footer">
  <p>Sito <span xml:lang="en" xml:abbr title="World Wide Web">Web</abbr>  realizzato da: </p>
  <p>Luca</p>
  <p>Matteo</p>
  <p>Franconetti Simone</p>
</div>


<?php $connection->closeConnection();?>


</body>
</html>
