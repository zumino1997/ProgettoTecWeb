<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

require_once __DIR__ . DIRECTORY_SEPARATOR . "connection.php";
use DB\DBConnection;
require_once __DIR__ . DIRECTORY_SEPARATOR . "PHP" . DIRECTORY_SEPARATOR . "validazione.php";

$connection = new DBConnection();
$dbOpen=$connection->openConnection();

if ($dbOpen){
  if (isset($_POST['registrati'])) {

    $nome=$_POST["nome"];
    $cognome=$_POST["cognome"];
    $citta=$_POST["citta"];
    $nascita=$_POST["nascita"];
    $indirizzo=$_POST["indirizzo"];
    $emailR=$_POST["emailR"];
    $passwordR=$_POST["passwordR"];
    $passwordR1=$_POST["passwordR1"];

    $data2 = str_replace('/', '-', $nascita );
    $newDate = date("Y-m-d", strtotime($data2));

    $_SESSION["var"] = array(
        'nome' => $nome,
        'cognome' => $cognome,
        'citta' => $citta,
        'nascita' => $nascita,
        'indirizzo' => $indirizzo,
        'emailR' => $emailR,
        'password' => $passwordR,
        'password1' => $passwordR1
      );
    // Validazione PHP degli input
    $nomeErr=valNome($nome);
    $cognomeErr=valCognome($cognome);
    $cittaErr=valCitta($citta);
    $nascitaErr=valNascita($data2);
    $indirizzoErr=valIndirizzo($indirizzo);
    $emailErr=valEmail($emailR);
    $passwordErr=valPassword($passwordR);
    $passwordErr1=valPassword1($passwordR,$passwordR1);
    $reg=valReg($nomeErr,$cognomeErr,$cittaErr,$nascitaErr,$indirizzoErr,$emailErr,$passwordErr,$passwordErr1);
  }
  if ($reg){      //se non c'è alcun errore negli input
    $passwordR=md5($passwordR);
    if (!$connection->getUser2($emailR)){         //se la mail non è già esistente
      $regi=$connection->insertUser($nome,$cognome,$citta,$indirizzo,$newDate,$emailR,$passwordR);
      $connection->closeConnection();
      $_SESSION["email"]=$emailR;
      $_SESSION["error"] = "";
      header("Location: profilo.php");
      exit();
    }
    else{
      $_SESSION['error']['mailErr']= "Indirizzo email giá esistente";
    }
  }
  else
  {
    $_SESSION["error"] = array(
        'nomeErr' => $nomeErr,
        'cognomeErr' => $cognomeErr,
        'cittaErr' => $cittaErr,
        'indirizzoErr' => $indirizzoErr,
        'nascitaErr' => $nascitaErr,
        'emailErr' => $emailErr,
        'passwordErr' => $passwordErr,
        'passwordErr1' => $passwordErr1
      );
  }

}
else {
		echo "Connessione non stabilita correttamente";     //if (dbOpen)
}
header("Location: registrazione.php");
exit();
$connection->closeConnection();
?>
