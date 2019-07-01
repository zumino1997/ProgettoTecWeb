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
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>



<link rel="stylesheet" type="text/css" href="CSS/css_index.css" media="handheld, screen"/>
<link rel="stylesheet" type="text/css" href="CSS/css_index_small_768px.css" media="handheld, screen and (max-width:768px),only screen and (max-device-width:720px)"/>
<link rel="stylesheet" type="text/css" href="CSS/css_index_small_480px.css" media="handheld, screen and (max-width:480px),only screen and (max-device-width:480px)"/>
<link rel="stylesheet" type="text/css" href="CSS/print.css" media="print"/>


<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>
<script type="text/javascript" src="JS/script.js"> </script>


</head>
<body>
  <div id="nav">
	  <div id="logo"><img src="IMG/logo1.png" alt="Logo Energya"/></div>
    <button id="menuIcon" onclick="menuHamburger()" ><img src="IMG/hamburger_icon.png" alt="icona menu"/></button>
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
			<p>Ti trovi in: <a href="contatti.php">Contatti</a> >> Contattaci</p>
		</div>
    <form id="login-register-form" action="post_contattaci.php" method="post" >
      <fieldset>
				<legend>Dati anagrafici</legend>
        <ul>
          <li>
            <label for="name">Nome:</label>
            <input type="text" name="nome" id="nome" />
          </li>
          <li>
            <label for="email" xml:lang="en">E-mail:</label>
            <input type="text" name="email" id="email"/>
          </li>
          <li>
            <label for="message-text">Messaggio:</label>
            <textarea name="messaggio" id="messaggio" rows="30"></textarea>
          </li>
          <li id="buttons-login">
            <input type="submit" class="button" name="invia" value="Invia"/>
          </li>
        </ul>
      </fieldset>
    </form>
	</div>

  <?php require_once __DIR__ . DIRECTORY_SEPARATOR . "footer.html"; ?>

</body>
</html>
