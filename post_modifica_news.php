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

$titoloErr=valTitolo($titolo);
$testoErr=valTesto($testo);
$altErr=valAlt($alt);
$news=valNews($titoloErr,$testoErr,$altErr);

$_SESSION["error"] = array(
    'titoloErr' => $titoloErr,
    'testoErr' => $testoErr,
    'altErr' => $altErr,
);

if ($dbOpen)
  if($news){
    $connection->updateNews($_GET['update'],$_GET['titolo'],$_GET['testo'],$_GET['alt']);
    $_SESSION["successoM"]=1;
  }
  else {
    header("Location: modifica_news_form.php?modifica=".$id);
    exit();
  }

else {
		echo "Connessione non stabilita correttamente";     //if (dbOpen)
}
header("Location: remove_modifica_news.php");
exit();
$connection->closeConnection();

?>
