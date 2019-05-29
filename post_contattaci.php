<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . "PHP" . DIRECTORY_SEPARATOR . "validazione.php";

if(isset($_POST['invia'])){
    $to = "wuyama@max-mail.com";
    $from = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $first_name = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
    if(!valEmail($from)) {
        $subject = "Richiesta informazioni Azienda Cavallin";
        $message = $_POST['messaggio'];
        $headers = "Messaggio da:" . $from;
        mail($to,$subject,$message,$headers);
    }
    // header("Location: contattaci.html");
    // exit();
}
?>
