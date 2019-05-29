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
		$number_of_results=$connection->numCorsi();
    $results_per_page = 4;
    $number_of_pages = ceil($number_of_results/$results_per_page);
    if (!isset($_GET['page']) || $_GET['page']>$number_of_pages || $_GET['page']<0) {
      $_GET['page']=1;
      $page = 1;
    } else {
      $page = $_GET['page'];
    }
    $this_page_first_result = ($page-1)*$results_per_page;
    $listaCorsi=$connection->getCorsi($this_page_first_result,$results_per_page);
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
			<li xml:lang="en"><a href="index.html">Home</a></li>
			<li id="currentLink">Corsi</li>
      <li><a href="galleria.php">Galleria</a></li>
			<li><a href="staff.html" xml:lang="en">Staff</a></li>
			<li><a href="contatti.html">Contatti</a></li>
      <li><a href="registrazione.php">Registrazione</a></li>
      <li><a href="login.php">Accedi</a></li>
		</ul>
	</div>



	<div id="header">
		<img src="IMG/logo1.png" alt=""/>
	</div>

  <div id="userBar">
    <ul>
      <li>
        <span><i class="far fa-user-circle" alt="user"></i></span>
        <a href="registrazione.php">Registrati</a>
      </li>
      <li>
        <span><i class="far fa-user-circle"></i></span>
        <a href="login.php">Accedi</a>
      </li>
    </ul>
  </div>

	<div id="content">

		<div id="breadcrumb">
			<p>Ti trovi in: Corsi </p>
		</div>

  	<h1 class="center">Corsi</h1>

  	<?php foreach ($listaCorsi as $corso) {
  		echo '<div class="box Sx">';
  		echo '<h2>'.$corso['Titolo'].'</h2>';
      echo '<img src="'.$corso['Immagine'].'"/>';
  		echo '<p>'.$corso['Descrizione'].'</p>';
      echo '<a href="corsoSingolo.php?id='.$corso['Id'].'">Scopri il corso "'.$corso['Titolo'].'"</a>';
  		echo '</div>';
  	} ?>

    <div class="pagination"><?php
    for ($page=1;$page<=$number_of_pages;$page++) {
      if ($_GET['page']!=$page)
        echo '<a href="corsi.php?page=' . $page . '">' . $page . '</a> ';
      else {
        echo '<span class="active"' . $page . '">' . $page . '</span> ';
      }
    }
    ?></div>
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
