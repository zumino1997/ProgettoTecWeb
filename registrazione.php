<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if ($_SESSION["loggedIn"] && $_SESSION["email"]){
	header("Location: index.html");
	exit();
}

require_once __DIR__ . DIRECTORY_SEPARATOR . "connection.php";
use DB\DBConnection;

$connection = new DBConnection();
$dbOpen=$connection->openConnection();

$_SESSION["error"] = "";
$nomeErr = $cognomeErr = $cittaErr = $nascitaErr = $indirizzoErr = $emailErr = $passwordErr = "";

if (isset($_POST["registrati"])){
	if ($dbOpen){
    $nome=mysqli_real_escape_string($connection->conn,$_POST["nome"]);
    $cognome=mysqli_real_escape_string($connection->conn,$_POST["cognome"]);
    $citta=mysqli_real_escape_string($connection->conn,$_POST["citta"]);
    $nascita=mysqli_real_escape_string($connection->conn,$_POST["nascita"]);
    $indirizzo=mysqli_real_escape_string($connection->conn,$_POST["indirizzo"]);
    $emailR=mysqli_real_escape_string($connection->conn,$_POST["emailR"]);
    $passwordR=mysqli_real_escape_string($connection->conn,$_POST["passwordR"]);
    $passwordR1=mysqli_real_escape_string($connection->conn,$_POST["passwordR1"]);

    if (empty($nome)){
      $nomeErr="Nome non inserito";
    }
    else if (!preg_match("/^[a-zA-Z ]*$/",$nome)) {
        $nomeErr = "Sono consentite solo lettere e spazi bianchi";
    }

    if (empty($cognome)){
      $cognomeErr="Cognome non inserito";
    }
    else if (!preg_match("/^[a-zA-Z ]*$/",$cognome)) {
        $cognomeErr = "Sono consentite solo lettere e spazi bianchi";
    }

    if (empty($citta)){
      $cittaErr="Cittá non inserita";
    }
    else if (!preg_match("/^[a-zA-Z ]*$/",$citta)) {
        $cittaErr = "Sono consentite solo lettere e spazi bianchi";
    }

    if (empty($nascita)){
      $nascitaErr="Data di nascita non inserita";
    }
    else{
      $nascita = date('Y-m-d', strtotime($nascita));
    }

    if (empty($indirizzo)){
      $indirizzoErr="Indirizzo non inserito";
    }
    else if (!preg_match("/^[A-Za-z0-9\-\/ ,.]+$/",$indirizzo)) {
        $indirizzoErr = "Sono consentite solo lettere, spazi bianchi e alcuni simboli ('-', '/', ',') ";
    }

    if (empty($emailR)){
      $emailErr="Indirizzo mail non inserito";
    }
    else if (!filter_var($emailR, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Formato della mail non valido";
    }

    if (empty($passwordR) && empty($passwordR1)){
      $passwordErr="password non inserita";
    }
    else if ($passwordR!=$passwordR1) {
      echo $passwordR,$passwordR1;
      $passwordErr = "Le password non corrispondono";
    }


    if (!$nomeErr && !$cognomeErr && !$cittaErr && !$indirizzoErr && !$nascitaErr && !$emailErr && !$passwordErr){
      $passwordR=md5($passwordR);
      if (!$connection->getUser2($emailR,$passwordR))
		    $reg=$connection->insertUser($nome,$cognome,$citta,$indirizzo,$nascita,$emailR,$passwordR);
    }

		if ($reg){
			$_SESSION["loggedIn"]=1;
			$_SESSION["email"]=$emailR;
			$_SESSION["error"] = "";
			header("Location: profilo.php");
			exit();
		}
		else{
      if ($connection->getUser2($emailR,$passwordR)){
        $_SESSION["error"] = "Indirizzo email giá esistente";
      }
      else
			   $_SESSION["error"] = "Registrazione non riuscita";
		}

	}
	else {
		echo "Connessione non stabilita correttamente";
	}
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


</head>
<body>
	<div id="nav">
	  <div id="logo"><img src="IMG/logo2.png" alt="Logo Energya"/></div>
	  <button id="menuIcon"><i class='fas fa-bars'></i></button>
	  <ul>
			<li><a href="index.html" xml:lang="en">Home</a></li>
	    <li><a href="corsi.html">Attivit&aacute;</a></li>
	    <li><a href="">Orari</a></li>
	    <li><a href="" xml:lang="en">Staff</a></li>
	    <li><a href="contatti.html">Contatti</a></li>
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
		<form action="registrazione.php" method="post" id="login-register-form">
			<fieldset>
				<legend> <span xml:lang="en">Dati anagrafici</span></legend>
				<ul>
          <li class="error">
						<label for="nome">Nome</label>:
						<input id="nome" name="nome" type="text" placeholder="Nome" <?php if (isset($nome)) echo "value=\"$nome\""; ?>/>
            <?php if($nomeErr) echo '<p>'. $nomeErr .'</p>'; ?>
					</li>
          <li class="error">
						<label for="cognome">Cognome</label>:
						<input id="cognome" name="cognome" type="text" placeholder="Cognome" <?php if (isset($cognome)) echo "value=\"$cognome\""; ?>/>
            <?php if($cognomeErr) echo '<p>'. $cognomeErr .'</p>'; ?>
					</li>
          <li class="error">
						<label for="citta">Citt&aacute;</label>:
						<input id="citta" name="citta" type="text" placeholder="Cittá" <?php if (isset($citta)) echo "value=\"$citta\""; ?>/>
            <?php if($cittaErr) echo '<p>'. $cittaErr .'</p>'; ?>
					</li>
          <li class="error">
						<label for="indirizzo">Indirizzo</label>:
						<input id="indirizzo" name="indirizzo" type="text" placeholder="Via" <?php if (isset($indirizzo)) echo "value=\"$indirizzo\""; ?>/>
            <?php if($indirizzoErr) echo '<p>'. $indirizzoErr .'</p>'; ?>
					</li>
          <li class="error">
						<label for="nascita">Data di nascita</label>:
						<input id="nascita" name="nascita" type="text" placeholder="Data di nascita" <?php if (isset($nascita)) echo "value=\"$nascita\""; ?>/>
            <?php if($nascitaErr) echo '<p>'. $nascitaErr .'</p>'; ?>
					</li>
				</ul>
			</fieldset>
      <fieldset>
				<legend> <span xml:lang="en">Dati per l'accesso</span></legend>
				<ul>
          <li class="error">
						<label for="emailR">Indirizzo email</label>:
						<input id="emailR" name="emailR" type="email" placeholder="Email" <?php if (isset($emailR)) echo "value=\"$emailR\""; ?>/>
            <?php if($emailErr) echo '<p class="error">'. $emailErr .'</p>'; ?>
					</li>
          <li class="error">
						<label for="passwordR1"><span xml:lang="en">Password</span></label>:
						<input id="passwordR1" name="passwordR1" type="password" placeholder="Password" />
					</li>
          <li class="error">
						<label for="passwordR">Conferma la <span xml:lang="en">password</span</label>:
						<input id="passwordR" name="passwordR" type="password" placeholder="Password" />
            <?php if($passwordErr) echo '<p class="error">'. $passwordErr .'</p>'; ?>
            <?php if($_SESSION["error"]) echo '<p class="error">'. $_SESSION["error"] .'</p>'; ?>
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




	<button id="scrollUp"><i class="fa fa-arrow-up"></i></button>

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


	<!-- <script>
		var body, scroll;
		body=document.getElementsByTagName("body");
		scroll=document.getElementById("scrollUp");
		window.onscroll=Scroll();


		function Scroll(){
			var altezza=0.5*window.innerHeight;
			if (body.scrollTop>altezza){
				scroll.classList.add("show");
			}
			else {
				scroll.classList.remove("show");
			}
		}
	</script> -->



<?php mysql_close($dbOpen); ?>

</body>
</html>
