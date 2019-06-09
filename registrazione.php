<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if (isset($_SESSION["email"])){
	header("Location: index.php");
	exit();
}

$_SESSION ['paginaCorr']="registrazione";

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
<link rel="stylesheet" type="text/css" href="CSS/print.css" media="print"/>


<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>
<script type="text/javascript" src="JS/script.js"> </script>


</head>
<body>
  <div id="nav">
	  <div id="logo"><img src="IMG/logo2.png" alt="Logo Energya"/></div>
    <button id="menuIcon" onclick="menuHamburger()" aria-label="menu icon"><img src="IMG/hamburger_icon.png" alt="menu icon"/></button>
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
			<p>Ti trovi in: <span xml:lang="en">Registrazione</span></p>
		</div>
		<form onsubmit="return checkReg()" action="post_registrazione.php" method="post" id="login-register-form">
			<fieldset>
				<legend>Dati anagrafici</legend>
				<ul>
          <li>
						<label for="nome">Nome</label>
            <?php //if (isset($_POST["nome"])) echo "value=\"$_POST[\"nome\"]\""; ?>
						<input id="nome" name="nome" type="text" <?php if(isset($_SESSION['error']['nomeErr']))if(isset ($_SESSION['var']['nome'])) {$nome = $_SESSION['var']['nome']; echo "value=\"$nome\"";} else echo "value=\"\"";?>/>
            <?php if(isset($_SESSION['error']['nomeErr'])) { echo '<span class="error">'. $_SESSION['error']['nomeErr'] .'</span>'; unset($_SESSION['error']['nomeErr']); } else {echo "";} ?>
					</li>
          <li>
						<label for="cognome">Cognome</label>
						<input id="cognome" name="cognome" type="text" <?php if(isset($_SESSION['error']['cognomeErr'])) if(isset ($_SESSION['var']['cognome'])) {$cognome=$_SESSION['var']['cognome'];echo "value=\"$cognome\"";} else echo "value=\"\"";?>/>
            <?php if(isset($_SESSION['error']['cognomeErr'])) { echo '<span class="error">'. $_SESSION['error']['cognomeErr'] .'</span>'; unset($_SESSION['error']['cognomeErr']); } else echo ""; ?>
					</li>
          <li>
						<label for="citta">Citt&aacute;</label>
						<input id="citta" name="citta" type="text" <?php if(isset($_SESSION['error']['cittaErr'])) if(isset ($_SESSION['var']['citta'])) {$citta=$_SESSION['var']['citta'];echo "value=\"$citta\"";} else echo "value=\"\"";?>/>
            <?php if(isset($_SESSION['error']['cittaErr'])) { echo '<span class="error">'. $_SESSION['error']['cittaErr'] .'</span>'; unset($_SESSION['error']['cittaErr']); } else echo ""; ?>
					</li>
          <li>
						<label for="indirizzo">Indirizzo</label>
						<input id="indirizzo" name="indirizzo" type="text"  <?php if(isset($_SESSION['error']['indirizzoErr'])) if(isset ($_SESSION['var']['indirizzo'])) {$indirizzo=$_SESSION['var']['indirizzo']; echo "value=\"$indirizzo\"";} else echo "value=\"\"";?>/>
            <?php if(isset($_SESSION['error']['indirizzoErr'])) { echo '<span class="error">'. $_SESSION['error']['indirizzoErr'] .'</span>'; unset($_SESSION['error']['indirizzoErr']); } else echo ""; ?>
					</li>
          <li>
						<label for="nascita">Data di nascita (dd/mm/yyyy)</label>
						<input id="nascita" name="nascita" type="text"  <?php if(isset($_SESSION['error']['nascitaErr'])) if(isset ($_SESSION['var']['nascita'])) {$nascita=$_SESSION['var']['nascita']; echo "value=\"$nascita\"";} else echo "value=\"\"";?>/>
            <?php if(isset($_SESSION['error']['nascitaErr'])) { echo '<span class="error">'. $_SESSION['error']['nascitaErr'] .'</span>'; unset($_SESSION['error']['nascitaErr']); } else echo ""; ?>
					</li>
				</ul>
			</fieldset>
      <fieldset>
				<legend>Dati per l'accesso</legend>
				<ul>
          <li>
						<label for="emailR">Indirizzo <span xml:lang="en">email</span></label>:
						<input id="emailR" name="emailR" type="text"  <?php if(isset($_SESSION['error']['emailErr'])) if(isset ($_SESSION['var']['emailR'])) {$email=$_SESSION['var']['emailR']; echo "value=\"$email\"";} else echo "value=\"\"";?>/>
            <?php if(isset($_SESSION['error']['emailErr'])) { echo '<span class="error">'. $_SESSION['error']['emailErr'] .'</span>'; unset($_SESSION['error']['emailErr']); } else echo ""; ?>
					</li>
          <li>
						<label for="passwordR"><span xml:lang="en">Password</span></label>:
						<input id="passwordR" name="passwordR" type="password"/>
					</li>
          <li>
						<label for="passwordR1">Conferma la <span xml:lang="en">password</span></label>:
						<input id="passwordR1" name="passwordR1" type="password" />
            <?php if(isset($_SESSION['error']['passwordErr'])) {echo '<span class="error">'. $_SESSION['error']['passwordErr'] .'</span>'; unset($_SESSION['error']['passwordErr']);}?>
            <?php if(isset($_SESSION['error']['passwordErr1'])) {echo '<span class="error">'. $_SESSION['error']['passwordErr1'] .'</span>'; unset($_SESSION['error']['passwordErr1']);}?>
            <?php if(isset($_SESSION['error']['mailErr'])) {echo '<span class="error">'. $_SESSION['error']['mailErr'] .'</span>';} ?>
					</li>
					<li id="buttons-login">
						<input value="Registrati" class="button" id="registrati" name="registrati" type="submit" />
						<input value="Cancella" class="button" id="delete-login-button" type="reset" />
					</li>
				</ul>
			</fieldset>
		</form>
	</div>

  <?php require_once __DIR__ . DIRECTORY_SEPARATOR . "footer.html"; ?>



</body>
</html>
