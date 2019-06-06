<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . "connection.php";
use DB\DBConnection;

$connection = new DBConnection();
$dbOpen=$connection->openConnection();

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

$_SESSION ['paginaCorr']="";

if ((!isset($_SESSION["email"]))||($_SESSION["email"]!="admin@admin.it")){
	header("Location: index.php");
	exit();
}
	if ($dbOpen){
    $listaGalleria=$connection->getGalleria();
		}
	else {
			$_SESSION["error"] = "Connessione non stabilita correttamente";
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it"><!-- il comando html permette di importare un namespace, contenente tutto l'insieme dei tag utilizzabili -->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <!--metatag che permette di dire che cosa ci sara' all'interno della pagina. Consiglio e' sempre quello di utilizzare la codifica utf-8 perche' e' univoco per la codifica degli accenti-->
<title>Energya Fitness Club</title>
<meta name="title" content="Energya Fitness Club"/>
<meta name="description" content=""/>
<meta name="keywords" content="Energya, fitness, palestra, sport"/>
<meta name="language" content="italian it"/>
<meta name="author" content="Franconetti Simone"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<link rel="stylesheet" type="text/css" href="CSS/css_index.css" media="handheld, screen"/>
<link rel="stylesheet" type="text/css" href="CSS/css_index_small_1200px.css" media="handheld, screen and (max-width:1200px),only screen and (max-device-width:1200px)"/>
<link rel="stylesheet" type="text/css" href="CSS/css_index_small_768px.css" media="handheld, screen and (max-width:768px),only screen and (max-device-width:768px)"/>
<link rel="stylesheet" type="text/css" href="CSS/css_index_small_480px.css" media="handheld, screen and (max-width:480px),only screen and (max-device-width:480px)"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css'>
<link rel="stylesheet" type="text/css" href="CSS/print.css" media="print"/>


<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>
<script type="text/javascript" src="JS/script.js"> </script>

</head>
<body>
  <div id="nav">
	  <div id="logo"><img src="IMG/logo2.png" alt="Logo Energya"/></div>
	  <button id="menuIcon" onclick="menuHamburger()"><i class='fas fa-bars'></i></button>
	  <ul class="menuItems" id="menuu" >
	    <li><a href="index.php" xml:lang="en">Home</a></li>
	    <li><a href="corsi.php">Corsi</a></li>
      <li><a href="abbonamenti.php">Abbonamenti</a></li>
			<li><a href="news.php">News</a></li>
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
			<p>Ti trovi in: Pannello di amministrazione >> Rimozione corsi</p>
		</div>


		<div class="divGenerico">
      <h1>Elimina foto galleria</h1>
      <p class="center">Per eliminare una delle immagini inserite all'interno della sezione "Galleria",
         premere il pulsante elimina al fianco del percorso dellà immagine corrispondente.</p>
         <?php
             if(!empty($listaGalleria))
               foreach ($listaGalleria as $galleria) {
                 echo'
                   <form id="rem" action="post_remove_galleria.php?id='.$galleria['Id'].'">
                     <p id="remP">'.$galleria['Immagine'].'</p><input type="hidden" value="'.$galleria['Id'].'" name="rimuovi"/>
                     <input type="submit" class="button" value="Rimuovi Immagine'.$galleria['Immagine'].'" name="submit"/>
                   </form>';
               }
          ?>

		</div>
	</div>

  <?php require_once __DIR__ . DIRECTORY_SEPARATOR . "footer.html"; ?>

</body>
</html>
