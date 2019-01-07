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
		$listaCorsi=$connection->getCorso();
		echo $listaCorsi["Titolo"];
		// foreach ($listaCorsi as $corso) {
		// 	echo $corso['descrizione'];
		// }
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


</head>
<body>

	<div id="nav">
		<div id="logo"><img src="IMG/logo2.png" alt="Logo Energya"/></div>
		<button id="menuIcon"><i class='fas fa-bars'></i></button>
		<ul>
			<li xml:lang="en"><a href="index.html">Home</a></li>
			<li> <a href="">Orario</a></li>
			<li id="currentLink">Corsi</li>
			<li><a href="">Attivit&aacute;</a></li>
			<li><a href="" xml:lang="en">Staff</a></li>
			<li><a href="contatti.html">Contatti</a></li>
		</ul>
	</div>



	<div id="header">
		<img src="IMG/logo1.png" alt=""/>
	</div>

	<div id="content">

		<div id="breadcrumb">
			<p>Ti trovi in: <span xml:lang="en">Corsi</span></p>

		</div>

	<div class="divGenerico">
	<h1>Corsi</h1>
		<div class="box Sx">
			<h2 xml:lang="en">Funktional</h2>
			<img src="IMG/corsi.JPG" alt="corso...."/>
			<p>Un <span xml:lang="en">workout </span>unico, pensato per chi vuole trovare il giusto
			   mix tra il lavoro cardio-coreografico (<span xml:lang="en">funk</span>) e l'allenamento
			   <span xml:lang="en">super-fun</span> per tonificare e rassodare attraverso un intenso lavoro
			   <span xml:lang="en">total body</span></p>
		</div>

		<div class="box Sx">
			<h2 xml:lang="en">Fitboxe</h2>
			<img src="IMG/corsi.JPG" alt="corso...."/>
			<p>Se sei stressato e hai voglia di sfogare la tensione della giornata è l'allenamento perfetto!
			   Un esercizio che combina cardio e tono, assemblando pugni, calci e gomitate a ritmo di musica,
			   perfetto per uomini, donne, grandi e piccini!</p>
		</div>
	</div>


	<div class="divGenerico">
		<div class="box Sx">
			<h2>Ginnastica dolce</h2>
			<img src="IMG/corsi.JPG" alt="corso...."/>
			<p>Un corso nella quale prevalgono movimenti lenti e graduali e attenta respirazione, eseguiti
			   al corpo libero senza richiedere uno sforzo particolare di chi la pratica.
			   Particolarmente indicata per chi ha problemi di postura, agli anziani e a donne in gravidanza!</p>
		</div>

		<div class="box Sx">
			<h2 xml:lang="en">Step &amp; total body</h2>
			<img src="IMG/corsi.JPG" alt="corso...."/>
			<p>Un allenamento indicato per tutti coloro che amano il fitness e che desiderano praticare
			   una combinazione tra allenamento di resistenza e forza a ritmo di musica!</p>
		</div>
	</div>


	<div class="divGenerico">
		<div class="box Sx">
			<h2><abbr title="Gambe Addominali Glutei">G.A.G.</abbr></h2>
			<img src="IMG/corsi.JPG" alt="corso...."/>
			<p>Gambe, addominali, glutei e non solo! &Egrave; un allenamento su base musicale molto amato,
			   semplice da seguire, adatto a tutte le età e tutte le esigenze. Attraverso l'utilizzo
			   di piccoli attrezzi come <span xml:lang="en">fitball</span>, elastici e <span xml:lang="en">slowball</span>
			   permette di tonificare le zone critiche</p>
		</div>

		<div class="box Sx">
			<h2 xml:lang="en">Pound</h2>
			<img src="IMG/corsi.JPG" alt="corso...."/>
			<p>Bacchette da batterista alla mano e musica a tutto volume. Il <span xml:lang="en">POUND</span>
			   è il nuovo <span xml:lang="en">workout</span> che permette di rassodare e bruciare calorie simulando
			   il <span xml:lang="en">drumming</span> dei batteristi</p>
		</div>
	</div>
</div>

	<div id="footer">
		Sito realizzato da bla bla bla
	</div>

	<button id="scrollUp"><i class="fa fa-arrow-up"></i></button>

</body>
</html>
