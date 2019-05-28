<?php

function valNome($nome){
  $nomeErr="";
  if (empty($nome)){
    $nomeErr="Nome non inserito";
  }
  else if (!preg_match("/^[a-zA-Z ]{3,}$/",$nome)) {
    $nomeErr = "Sono consentite solo lettere e spazi bianchi";
  }
  return $nomeErr;
}

function valCognome($cognome){
  $cognomeErr="";
  if (empty($cognome)){
    $cognomeErr="Cognome non inserito";
  }
  else if (!preg_match("/^[a-zA-Z ]{3,}$/",$cognome)) {
      $cognomeErr = "Sono consentite solo lettere e spazi bianchi";
  }
  return $cognomeErr;
}

function valCitta($citta){
  $cittaErr="";
  if (empty($citta)){
    $cittaErr="Cittá non inserita";
  }
  else if (!preg_match("/^[a-zA-Z ]{2,}$/",$citta)) {
      $cittaErr = "Sono consentite solo lettere e spazi bianchi";
  }
  return $cittaErr;
}

function valNascita($nascita){
  $nascitaErr="";
  if (empty($nascita)){
    $nascitaErr="Data di nascita non inserita";
  }
  else{
    $nascita = date('Y-m-d', strtotime($nascita));
  }
  return $nascitaErr;
}


function valIndirizzo($indirizzo){
  $indirizzoErr="";
  if (empty($indirizzo)){
    $indirizzoErr="Indirizzo non inserito";
  }
  else if (!preg_match("/^[A-Za-z0-9\-\/ ,.]+$/",$indirizzo)) {
      $indirizzoErr = "Sono consentite solo lettere, spazi bianchi e alcuni simboli ('-', '/', ',') ";
  }
  return $indirizzoErr;
}

function valEmail($emailR){
  $emailErr="";
  if (empty($emailR)){
    $emailErr="Indirizzo mail non inserito";
  }
  else if (!filter_var($emailR, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Formato della mail non valido";
  }
  return $emailErr;
}

function valPassword($passwordR){
  $passwordErr="";
  if (empty($passwordR)){
    $passwordErr="password non inserita";
  }
  if (!preg_match("/^.{8,}$/",$passwordR)) {
    $passwordErr = "La password non ha almeno 8 caratteri";
  }
  return $passwordErr;
}

function valPassword1($passwordR,$passwordR1){
  $passwordErr1="";
  if ($passwordR!=$passwordR1) {
    $passwordErr1 = "Le password non corrispondono";
  }
  return $passwordErr1;
}

function valReg($nomeErr,$cognomeErr,$cittaErr,$nascitaErr,$indirizzoErr,$emailErr,$passwordErr,$passwordErr1){
  if (empty($nomeErr) && empty($cognomeErr) && empty($cittaErr) && empty($nascitaErr) && empty($indirizzoErr) && empty($emailErr) && empty($passwordErr) && empty($passwordErr1)  )
    {
      return true;
    }
    else {
      return false;
    }
}


 ?>
