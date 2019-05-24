<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . "connection.php";
use DB\DBConnection;
require_once __DIR__ . DIRECTORY_SEPARATOR . "PHP" . DIRECTORY_SEPARATOR . "val_registrazione.php";

$connection = new DBConnection();
$dbOpen=$connection->openConnection();

$_SESSION["error"] = "";


if ($dbOpen){

  $nome=$_POST["nome"];
  $cognome=$_POST["cognome"];
  $citta=$_POST["citta"];
  $nascita=$_POST["nascita"];
  $indirizzo=$_POST["indirizzo"];
  $emailR=$_POST["emailR"];
  $passwordR=$_POST["passwordR"];
  $passwordR1=$_POST["passwordR1"];

  // Validazione PHP degli input
  $nomeErr=valNome($nome);
  $cognomeErr=valCognome($cognome);
  $cittaErr=valCitta($citta);
  $nascitaErr=valNascita($nascita);
  $indirizzoErr=valIndirizzo($indirizzo);
  $emailErr=valEmail($emailR);
  $passwordErr=valPassword($passwordR);
  $passwordErr1=valPassword1($passwordR,$passwordR1);
  $reg=valReg();


  if ($reg){      //se non c'è alcun errore negli input
    $passwordR=md5($passwordR);
    if (!$connection->getUser2($emailR)){         //se la mail non è già esistente
      $regi=$connection->insertUser($nome,$cognome,$citta,$indirizzo,$nascita,$emailR,$passwordR);
      $_SESSION["email"]=$emailR;
      $_SESSION["error"] = "";
      header("Location: profilo.php");
    }
    else{
      $_SESSION["error"] = "Indirizzo email giá esistente";
    }
  }
  else
  {
      $_SESSION["error"] = "Registrazione non riuscita";
  }

}
else {
		echo "Connessione non stabilita correttamente";     //if (dbOpen)
}
header("Location: registrazione.php");
exit();

?>
