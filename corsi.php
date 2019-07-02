<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

$_SESSION ['paginaCorr']="";
$_SESSION["error"] = "";

require_once __DIR__ . DIRECTORY_SEPARATOR . "connection.php";
use DB\DBConnection;

$connection = new DBConnection();
$dbOpen=$connection->openConnection();

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
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Script-Type" content="text/javascript"/>
<title>Energya Fitness Club</title>
<meta name="title" content="Energya Fitness Club"/>
<meta name="description" content="Energya - un luogo per tutti quelli che amano la palestra e vogliono sentirsi come in famiglia!"/>
<meta name="keywords" content="Energya, fitness, palestra, sport"/>
<meta name="language" content="italian it"/>
<meta name="author" content="Franconetti Simone, Infantino Matteo, Marcon Luca"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

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
    <button id="menuIcon" title="menuIcon" onclick="menuHamburger()" ><img src="IMG/hamburger_icon.png" alt="icona menu"/></button>
    <ul class="menuItems" id="menuu" >
      <li><a href="index.php" xml:lang="en">Home</a></li>
			<li id="currentLink">Corsi</li>
      <li><a href="abbonamenti.php">Abbonamenti</a></li>
      <li><a href="news.php">News</a></li>
      <li><a href="galleria.php">Galleria</a></li>
			<li><a href="staff.php" xml:lang="en">Staff</a></li>
			<li><a href="contatti.php">Contatti</a></li>
      <?php require_once __DIR__ . DIRECTORY_SEPARATOR . "userbar_mobile.php";?>
		</ul>
	</div>

	<div id="header">
		<img src="IMG/logo1.png" alt="Logo Energya"/>
	</div>

  <?php require_once __DIR__ . DIRECTORY_SEPARATOR . "userbar.php";?>

	<div id="content">

		<div id="breadcrumb">
			<p>Ti trovi in: Corsi </p>
		</div>

  	<h1 class="center">Corsi</h1>

  	<?php
    if(!empty($listaCorsi)){
      foreach ($listaCorsi as $corso) {
    		echo '<div class="box Sx">';
    		echo '<h1>'.$corso['Titolo'].'</h1>';
        echo '<img src="'.$corso['Immagine'].'" alt="'.$corso['Alt'].'"/>';
    		echo '<p>'.$corso['Descrizione'].'</p>';
        echo '<a href="corsoSingolo.php?id='.$corso['Id'].'">Scopri il corso "'.$corso['Titolo'].'"</a>';
    		echo '</div>';
    	}
    }
    else{
      echo '<h1>Non &egrave; disponibile alcun corso</h1>';
    }
    ?>

    <div class="pagination"><?php
    for ($page=1;$page<=$number_of_pages;$page++) {
      if ($_GET['page']!=$page)
        echo '<a href="corsi.php?page=' . $page . '">' . $page . '</a> ';
      else {
        echo '<span class="active">' . $page . '</span> ';
      }
    }
    ?>
		</div>
</div>

<?php require_once __DIR__ . DIRECTORY_SEPARATOR . "footer.html"; ?>

<?php $connection->closeConnection();?>

<noscript>
	  <ul id="NoJS">
      <li><a href="index.php" xml:lang="en">Home</a></li>
			<li>Corsi</li>
      <li><a href="abbonamenti.php">Abbonamenti</a></li>
      <li><a href="news.php">News</a></li>
      <li><a href="galleria.php">Galleria</a></li>
			<li><a href="staff.php" xml:lang="en">Staff</a></li>
			<li><a href="contatti.php">Contatti</a></li>
			<?php require_once __DIR__ . DIRECTORY_SEPARATOR . "userbar_mobile.php";?>
      <?php require_once __DIR__ . DIRECTORY_SEPARATOR . "userbar.php";?>
	  </ul>
</noscript>

</body>
</html>
