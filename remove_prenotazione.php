<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

require_once __DIR__ . DIRECTORY_SEPARATOR . "connection.php";
use DB\DBConnection;

$connection = new DBConnection();
$dbOpen=$connection->openConnection();

if ($dbOpen){
  $connection->removePrenotazione($_SESSION['email']);
}
else {
		echo "Connessione non stabilita correttamente";     //if (dbOpen)
}
header("Location: profilo.php");
exit();

php $connection->closeConnection();

?>
