<?php


require_once __DIR__ . DIRECTORY_SEPARATOR . "connection.php";
use DB\DBConnection;
require_once __DIR__ . DIRECTORY_SEPARATOR . "PHP" . DIRECTORY_SEPARATOR . "val_registrazione.php";


if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if (isset($_SESSION["email"])){
	header("Location: index.html");

	exit();
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
<link rel="stylesheet" type="text/css" href="CSS/css_index_small_720px.css" media="handheld, screen and (max-width:768px),only screen and (max-device-width:720px)"/>
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
      <li><a href="index.html" xml:lang="en">Home</a></li>
	    <li><a href="corsi.php">Corsi</a></li>
	    <li><a href="">Galleria</a></li>
      <li><a href="galleria.php">Galleria</a></li>
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
	      <span>Registrati</span>
	    </li>
	    <li>
	      <span><i class="far fa-user-circle"></i></span>
        <a href="login.php">Accedi</a>
	    </li>
	  </ul>
	</div>

	<div id="content">
		<div id="breadcrumb">
			<p>Ti trovi in: <span xml:lang="en">Registrazione</span></p>
		</div>
		<form  action="post_registrazione.php" method="post" id="login-register-form">
			<fieldset>
				<legend> <span xml:lang="en">Dati anagrafici</span></legend>
				<ul>
          <li class="error">
						<label for="nome">Nome</label>:
						<input id="nome" name="nome" type="text" <?php if (isset($nome)) echo "value=\"$nome\""; ?>/>
            <?php if(isset($nomeErr)) echo '<span>'. $nomeErr .'</span>'; ?>
					</li>
          <li class="error">
						<label for="cognome">Cognome</label>:
						<input id="cognome" name="cognome" type="text" <?php if (isset($cognome)) echo "value=\"$cognome\""; ?>/>
            <?php if(isset($cognomeErr)) echo '<span>'. $cognomeErr .'</span>'; ?>
					</li>
          <li class="error">
						<label for="citta">Citt&aacute;</label>:
						<input id="citta" name="citta" type="text" <?php if (isset($citta)) echo "value=\"$citta\""; ?>/>
            <?php if(isset($cittaErr)) echo '<span>'. $cittaErr .'</span>'; ?>
					</li>
          <li class="error">
						<label for="indirizzo">Indirizzo</label>:
						<input id="indirizzo" name="indirizzo" type="text"  <?php if (isset($indirizzo)) echo "value=\"$indirizzo\""; ?>/>
            <?php if(isset($indirizzoErr)) echo '<span>'. $indirizzoErr .'</span>'; ?>
					</li>
          <li class="error">
						<label for="nascita">Data di nascita</label>:
						<input id="nascita" name="nascita" type="text"  <?php if (isset($nascita)) echo "value=\"$nascita\""; ?>/>
            <?php if(isset($nascitaErr)) echo '<span>'. $nascitaErr .'</span>'; ?>
					</li>
				</ul>
			</fieldset>
      <fieldset>
				<legend> <span xml:lang="en">Dati per l'accesso</span></legend>
				<ul>
          <li class="error">
						<label for="emailR">Indirizzo <span xml:lang="en">email</span></label>:
						<input id="emailR" name="emailR" type="email"  <?php if (isset($emailR)) echo "value=\"$emailR\""; ?>/>
            <?php if(isset($emailErr)) echo '<span class="error">'. $emailErr .'</span>'; ?>
					</li>
          <li class="error">
						<label for="passwordR"><span xml:lang="en">Password</span></label>:
						<input id="passwordR" name="passwordR" type="password"  />
					</li>
          <li class="error">
						<label for="passwordR1">Conferma la <span xml:lang="en">password</span></label>:
						<input id="passwordR1" name="passwordR1" type="password" />
            <?php if(isset($passwordErr)) echo '<span class="error">'. $passwordErr .'</span>'; ?>
            <?php if(isset($passwordErr1)) echo '<span class="error">'. $passwordErr1 .'</span>'; ?>
            <?php if(isset($_SESSION["error"])) echo '<span class="error">'. $_SESSION["error"] .'</span>'; ?>
					</li>
					<li id="buttons-login">
						<input value="Registrati" class="button" id="registrati" name="registrati" type="submit" />
						<input value="Cancella" class="button" id="delete-login-button" type="reset" />
					</li>
				</ul>
			</fieldset>
		</form>
	</div>

	<div id="footer">
		<p>Sito <span xml:lang="en" xml:abbr title="World Wide Web">Web</abbr>  realizzato da: </p>
		<p>Luca</p>
		<p>Matteo</p>
		<p>Franconetti Simone</p>
	</div>


 <script>
	function myFunction() {
	  var x = document.getElementById("password");
	  if (x.type === "password") {
	    x.type = "text";
	  } else {
	    x.type = "password";
	  }
	}
</script>


<?php mysqli_close($dbOpen); ?>

</body>
</html>
