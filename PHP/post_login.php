<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

require_once __DIR__ . DIRECTORY_SEPARATOR . "connection.php";
use DB\DBConnection;
require_once __DIR__ . DIRECTORY_SEPARATOR . "validazione.php";

$connection = new DBConnection();
$dbOpen=$connection->openConnection();

if ($dbOpen){
  if (isset($_POST['login'])) {
    $email=$_POST["email"];
    $password=$_POST["password"];

    $_SESSION["var"] = array(
        'email' => $email,
        'password' => $password
      );
  }

  $password=md5($password);
  if ($connection->getUser($email,$password)){         //se la mail non è già esistente
    $connection->closeConnection();
    $_SESSION["email"]=$email;
    $_SESSION["error"] = "";
    if($_SESSION["email"]=="admin@admin.it")
      header("Location: ../HTML/amministrazione.php");
    else
      header("Location: ../HTML/profilo.php");
    exit();
  }
  else{
    $_SESSION['error']['mailErr2']= "Email o password non corretti";
  }
}
else {
		echo "Connessione non stabilita correttamente";     //if (dbOpen)
}

header("Location: ../HTML/login.php");
exit();

$connection->closeConnection();

?>
