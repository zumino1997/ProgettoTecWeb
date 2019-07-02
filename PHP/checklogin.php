<?php

if (!isset($_SESSION["email"])){
	header("Location: ../HTML/pagina_errore_accesso.php");
	exit();
}

?>
