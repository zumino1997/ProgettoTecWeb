<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

require_once __DIR__ . DIRECTORY_SEPARATOR . "connection.php";
use DB\DBConnection;

$connection = new DBConnection();
$dbOpen=$connection->openConnection();

if ($dbOpen){
  $connection->removeNews($_GET['rimuovi']);
  $_SESSION["successoR"]=1;
}
else {
		echo "Connessione non stabilita correttamente";     //if (dbOpen)
}
header("Location: ../HTML/remove_modifica_news.php");
exit();
$connection->closeConnection();

?>
