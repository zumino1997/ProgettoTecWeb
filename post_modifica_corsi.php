<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

require_once __DIR__ . DIRECTORY_SEPARATOR . "connection.php";
use DB\DBConnection;
require_once __DIR__ . DIRECTORY_SEPARATOR . "PHP" . DIRECTORY_SEPARATOR . "validazione.php";

$connection = new DBConnection();
$dbOpen=$connection->openConnection();

$id=$_GET["update"];
$titolo=$_GET["titolo"];
$testo=$_GET["testo"];
$alt=$_GET["alt"];
$testoLong=$_GET["testoLong"];

$titoloErr=valTitolo($titolo);
$testoErr=valTesto($testo);
$altErr=valAlt($alt);
$testoLongErr=valTestoLong($testoLong);
$cor=valCorsi($titoloErr,$testoErr,$altErr,$testoLongErr);

$_SESSION["error"] = array(
    'titoloErr' => $titoloErr,
    'testoErr' => $testoErr,
    'altErr' => $altErr,
    'testoErr' => $testoLongErr
);


if ($dbOpen)
  if($cor){
    $connection->updateCorsi($_GET['update'],$_GET['titolo'],$_GET['testo'],$_GET['testoLong'],$_GET['alt']);
    $_SESSION["successoM"]=1;
  }
  else {
    header("Location: modifica_corsi_form.php?modifica=".$id);
    exit();
  }

else {
		echo "Connessione non stabilita correttamente";     //if (dbOpen)
}
header("Location: remove_modifica_corsi.php");
exit();
$connection->closeConnection();

?>
