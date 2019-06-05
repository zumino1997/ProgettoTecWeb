<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . "connection.php";
use DB\DBConnection;

$connection = new DBConnection();
$dbOpen=$connection->openConnection();

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if ((!isset($_SESSION["email"]))||($_SESSION["email"]=="admin@admin.it")){
	header("Location: index.php");
	exit();
}

if ($dbOpen){
    $listaUtente=$connection->getUtente($_SESSION['email']);
    $listaCorsi=$connection->getCorsi(0,$connection->numCorsi());
    $listaPrenotazioni=$connection->getPrenotazioni($_SESSION['email']);
	}
else {
		$_SESSION["error"] = "Connessione non stabilita correttamente";
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
<link rel="stylesheet" type="text/css" href="CSS/css_index_small_768px.css" media="handheld, screen and (max-width:768px),only screen and (max-device-width:720px)"/>
<link rel="stylesheet" type="text/css" href="CSS/css_index_small_480px.css" media="handheld, screen and (max-width:480px),only screen and (max-device-width:480px)"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.2/css/all.css'>


<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>
<script type="text/javascript" src="JS/script.js"> </script>


</head>
<body>
  <div id="nav">
	  <div id="logo"><img src="IMG/logo2.png" alt="Logo Energya"/></div>
	  <button id="menuIcon" onclick="menuHamburger()"><i class='fas fa-bars'></i></button>
	  <ul class="menuItems" id="menuu" >
	    <li id="currentLink" xml:lang="en">Home</li>
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
			<p>Ti trovi in: <span xml:lang="en">Registrazione</span></p>
		</div>

<?php
  foreach ($listaUtente as $utente){
    if(isset($_SESSION['email'])){
      $nome = $utente['nome'];
      $cognome = $utente['cognome'];
      $citta = $utente['citta'];
      $indirizzo = $utente['indirizzo'];
      $nascita = $utente['nascita'];
      $email = $utente['email'];
    }
  }

 ?>

      <div id="divGenerico">
    		<h1 class="center">Informazioni Utente</h1>
        <ul class="anagrafica">
          <li><span>Nome:</span> <?php echo $nome;?></li>
          <li><span>Cognome:</span> <?php echo $cognome;?></li>
          <li><span>Citt&agrave;</span>: <?php echo $citta;?></li>
        </ul>
        <ul class="anagrafica">
          <li><span>Indirizzo:</span> <?php echo $indirizzo;?></li>
          <li><span>Data di Nascita:</span> <?php echo date("d-m-Y", strtotime($nascita));?></li>
          <li><span>Indirizzo</span> <span xml:lang="en">email</span>: <?php echo $email;?></li>
    		</ul>
      </div>

  <form onsubmit="return checkInsPrenotazioni()" action="post_utente.php" method="post" id="login-register-form" enctype="multipart/form-data">
    <fieldset>
      <legend>Prenota una lezione gratuita</legend>
      <ul>
      <li>
        <select id="corso" name="corso">
          <?php
            foreach ($listaCorsi as $corsi) {
              echo '<option value="'.$corsi['Titolo'].'">'.$corsi['Titolo'].'</option>';                    }
          ?>
        </select>
      </li>
      <li>
        <label for="data">Data:</label>
        <input id="data" name="data" type="text" />
        <?php $errorData=""; if(isset($_SESSION['error']['dataErr'])) { $errorData = $_SESSION['error']['dataErr']; unset($_SESSION['error']['dataErr']); } ?>
      </li>
      <li>
        <label for="ora">Ora:</label>
        <input id="ora" name="ora" type="text" />
        <?php $errorOra=""; if(isset($_SESSION['error']['oraErr'])) { $errorOra = $_SESSION['error']['oraErr']; unset($_SESSION['error']['oraErr']); } ?>
        <?php echo '<span class="error">'.$errorData.$errorOra.'</span>'?>
      </li>
      <li id="buttons-login">
        <input id="utenteButt" class="button" value="Prenota" name="prenota" type="submit" />
        <?php if(isset($_SESSION['error']['emailErr'])){ echo '<span class="error">'.$_SESSION["error"]["emailErr"].'</span>'; unset($_SESSION['error']['emailErr']); }?>
      </li>
    </ul>
    </fieldset>
  </form>

  <div class="center">
    <?php
      if(!empty($listaPrenotazioni)){
        echo '<h1>La tua prenotazione gratuita</h1>';
        foreach ($listaPrenotazioni as $prenotazioni) {
          echo '<p id="pren">Nome Corso: '.$prenotazioni['corso'].'</p>';
          echo '<p id="pren">Data Corso: '.date("d-m-Y", strtotime($prenotazioni['data'])).'</p>';
          echo '<p id="pren">Ora Corso: '.$prenotazioni['ora'].'</p>';
        }
        echo '<form action="remove_prenotazione.php" method="post">
                <input class="button" value ="Elimina Prenotazione" type="submit"/>
              </form>';
      }
      else echo '<h1>Devi ancora effettura la tua prenotazione</h1>';
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
