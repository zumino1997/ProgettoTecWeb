<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . "connection.php";
use DB\DBConnection;
require_once __DIR__ . DIRECTORY_SEPARATOR . "PHP" . DIRECTORY_SEPARATOR . "validazione.php";

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

$connection = new DBConnection();
$dbOpen=$connection->openConnection();

$titolo=$_POST["titolo"];
$testo=$_POST["testo"];
$testoLong=$_POST["testoLong"];
$alt=$_POST["alt"];

$_SESSION["successo"]="";
$titoloErr=valTitolo($titolo);
$testoErr=valTesto($testo);
$testoLongErr=valTestoLong($testoLong);
$altErr=valAlt($alt);
$cor=valCorsi($titoloErr,$testoErr,$testoLongErr,$altErr);

$_SESSION["var"] = array(
    'titolo' => $titolo,
    'testo' => $testo,
    'testoLong' => $testoLong,
    'alt'=> $alt
);

$err ="";

$target_dir = "IMG/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["inserisci"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check == true) {
        $uploadOk = 1;
    }
    if($check == true && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        $err = "Sono permesse solamente estensioni .jpg, .png, .jpeg, .gif";
        $uploadOk = 0;
    }
    else if ($check == true && $_FILES["fileToUpload"]["size"] > 500000) {
        $err = "Il file è troppo grande per essere caricato";
        $uploadOk = 0;
    }
    else if ($check == false) {
        $err = "Inserire un'immagine";
    }

    if ($uploadOk == 1 && move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) && $cor) {
        $connection->insertCorsi($titolo,$testo,$target_file,$testoLong,$alt);
        $_SESSION["successo"]=1;
      }
}

$_SESSION["error"] = array(
    'titoloErr' => $titoloErr,
    'testoErr' => $testoErr,
    'testoLongErr' => $testoLongErr,
    'altErr'=> $altErr,
    'err' => $err
);

  header("Location: corsi_form.php");
  exit();

$connection->closeConnection();

?>
