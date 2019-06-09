<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . "connection.php";
use DB\DBConnection;
require_once __DIR__ . DIRECTORY_SEPARATOR . "PHP" . DIRECTORY_SEPARATOR . "validazione.php";

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

$connection = new DBConnection();
$dbOpen=$connection->openConnection();

if ($dbOpen){
  $listaPrenotazioni=$connection->getPrenotazioni($_SESSION['email']);
  if (isset($_POST['prenota'])){
    $email=$_SESSION["email"];
    $corso=$_POST["corso"];
    $data=$_POST["data"];
    $ora = $_POST["ora"];
    $data2 = str_replace('/', '-', $data );
    $newDate = date("Y-m-d", strtotime($data2));
    $nowD = date("Y-m-d");
    $nowT = date("H:m:s");

    $dataErr = valNascita($data2);
    $oraErr = valOra($ora);
    $emailErr = "";
    $_SESSION["var"] = array(
        'email' => $email,
        'corso' => $corso,
        'data' => $newDate,
        'ora' => $ora
    );

    // echo count($listaPrenotazioni);

    if(valPrenotazioni($dataErr,$oraErr)){
      if (empty($listaPrenotazioni)){
        if($newDate>$nowD){
          $connection->insertPrenotazione($email,$corso,$newDate,$ora);
        }
        if($newDate==$nowD){
          if ($ora>$nowT){
            $connection->insertPrenotazione($email,$corso,$newDate,$ora);
          }
          else {
            $emailErr="Ora già trascorsa";
          }
        }
        if($newDate<$nowD) {
          $emailErr="Data già trascorsa";
        }
      }
      else {
        $emailErr="Lezione gratuita già prenotata";
      }
    }

      $_SESSION["error"] = array(
        'dataErr' => $dataErr,
        'oraErr' => $oraErr,
        'emailErr' => $emailErr
      );
  }

}

header("Location: profilo.php");
exit();
$connection->closeConnection();

?>
