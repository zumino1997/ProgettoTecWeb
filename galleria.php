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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">


<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>


</head>
<body>

	<div id="nav">
	  <div id="logo"><img src="IMG/logo2.png" alt="Logo Energya"/></div>
	  <button id="menuIcon"><i class='fas fa-bars'></i></button>
	  <ul>
	    <li id="currentLink" xml:lang="en">Home</li>
	    <li><a href="">Attivit&aacute;</a></li>
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
	      <a href="#">Registrati</a>
	    </li>
	    <li>
	      <span><i class="far fa-user-circle"></i></span>
	      <a href="#">Accedi</a>
	    </li>
	  </ul>
	</div>

	<div id="content">
		<div id="row">
			<div id="column">
				<img src="IMG/foto1.jpg" onclick="show()" alt=""/>
			</div>
			<div id="column">
				<img src="IMG/foto1.jpg" onclick="show()" alt=""/>
			</div>
			<div id="column">
				<img src="IMG/foto1.jpg" onclick="show()" alt=""/>
			</div>
			<div id="column">
				<img src="IMG/foto1.jpg" onclick="show()" alt=""/>
			</div>		
		</div>
		<div id="row">
			<div id="column">
				<img src="IMG/foto1.jpg" onclick="show()" alt=""/>
			</div>
			<div id="column">
				<img src="IMG/foto1.jpg" onclick="show()" alt=""/>
			</div>
			<div id="column">
				<img src="IMG/foto1.jpg" onclick="show()" alt=""/>
			</div>
			<div id="column">
				<img src="IMG/foto1.jpg" onclick="show()" alt=""/>
			</div>		
		</div>
		<div id="row">
			<div id="column">
				<img src="IMG/foto1.jpg" onclick="show()" alt=""/>
			</div>
			<div id="column">
				<img src="IMG/foto1.jpg" onclick="show()" alt=""/>
			</div>
			<div id="column">
				<img src="IMG/foto1.jpg" onclick="show()" alt=""/>
			</div>
			<div id="column">
				<img src="IMG/foto1.jpg" onclick="show()" alt=""/>
			</div>		
		</div>
		
		<div id="showImage">
			  <span id="closeImage" onclick="closeImage()">&times;</span>
				<img src="IMG/foto1.jpg" alt=""/>
		</div>
	</div>

	</div>

	<div id="footer">
		<p>Sito <span xml:lang="en" xml:abbr title="World Wide Web">Web</abbr>  realizzato da: </p>
		<p>Luca</p>
		<p>Matteo</p>
		<p>Franconetti Simone</p>
	</div>




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


<script>
	function show() {
		document.getElementById('showImage').style.display = "block";
	}
	function closeImage() {
		document.getElementById('showImage').style.display = "none";
	}
</script>


</body>
</html>
