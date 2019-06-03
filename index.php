<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
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
			<p>Ti trovi in: <span xml:lang="en">Home</span></p>
		</div>

		<div class="divSx">
			<h1>Chi siamo</h1>
			<img src="IMG/foto1.jpg" alt=""/>
			<p>Il Centro Natatorio Comunale <span xml:lang="en">"Freestyle"</span> offre numerose opportunità per sfruttare i benefici garantiti dal movimento in acqua, in un ambiente accogliente e confortevole, sotto la guida di uno staff di Istruttori Federali preparati e disponibili.</p>
			<p>Le attività didattiche sono organizzate secondo le norme della Scuola Nuoto Federale e programmate nell'intero arco dell'anno sportivo. </p>
			<p>Lo schema didattico prevede diversi gradi di apprendimento delle tecniche di base e di perfezionamento sia nel nuoto che nelle altre attivit&aacute;.</p>
		</div>

		<div class="divDx">
			<h1>La nostra storia</h1>
			<img src="IMG/foto2.jpg" alt="Interno della palestra"/>
			<p>La struttura, nata nel 1981, ospita da molti anni competizioni natatorie a livello regionale.</p>
			<p>Nel 1983 l'impianto aderir&aacute; ufficialmente alle norme della <abbr title="Federazione Italiana Nuoto">FIN</abbr>, avendo l'obbligo di formare i propri istruttori e collaboratori con relativi corsi indetti dalla federazione. </p>
			<p>Nel 2016 verr&aacute; premiata come centro natatorio migliore in Veneto</p>
		</div>

		<div id="Banner">
			<div>
				<h1>Iscriviti ai corsi</h1>
				<p>Tanti istruttori formati professionalmente, pronti a fornirti il loro supporto in ogni attivit&aacute;</p>
				<button class="button">Iscriviti</button>
			</div>
		</div>

		<div class="divGenerico">

			<h1> I nostri punti di forza </h1>
			<div class="Card Sx">
				<img src="IMG/woman.png" alt="Icona persona con manubri"/>
				<h2>Professionalit&aacute;</h2>
				<p>La struttura, nata nel 1981, ospita da molti anni competizioni natatorie a livello regionale.</p>
			</div>

			<div class="Card Dx">
				<img src="IMG/gym.png" alt="Icona manubrio"/>
				<h2>Benessere</h2>
				<p>La struttura, nata nel 1981, ospita da molti anni competizioni natatorie a livello regionale.</p>
			</div>

		</div>

	</div>

	<div id="footer">
		<p>Sito <span xml:lang="en" xml:abbr title="World Wide Web">Web</abbr>  realizzato da: </p>
		<p>Luca</p>
		<p>Matteo</p>
		<p>Franconetti Simone</p>
	</div>




</body>
</html>
