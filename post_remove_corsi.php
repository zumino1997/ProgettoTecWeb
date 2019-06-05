<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

require_once __DIR__ . DIRECTORY_SEPARATOR . "connection.php";
use DB\DBConnection;

$connection = new DBConnection();
$dbOpen=$connection->openConnection();

if ($dbOpen){
  $connection->removeCorsi($_GET['rimuovi']);
}
else {
		echo "Connessione non stabilita correttamente";     //if (dbOpen)
}
header("Location: remove_modifica_corsi.php");
exit();
$connection->closeConnection();

?>
