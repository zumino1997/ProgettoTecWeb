<?php
namespace DB;
class DBConnection
{
  const host = 'localhost';
  const user = 'root';
  const pwd = 'root';
  const db = 'test';

  public $conn;

  /* Apre una connessione con il db con le variabili impostate precedentemente */
  public function openConnection()  {
    $this->conn = mysqli_connect(static::host, static::user, static::pwd, static::db);
    if (!$this->conn) {
      return false;
    }
    return true;
  }

  public function getUser($email,$psw){
    $querySelect= 'SELECT mail FROM utenti WHERE mail= "' . $email . '" and password="'. $psw .'"';
    $queryResult = mysqli_query($this->conn,$querySelect);
    if (mysqli_num_rows($queryResult)==0)
      return false;
    else {
      return true;
    }
  }

  public function getUser2($email,$psw){
    $querySelect= 'SELECT mail FROM utenti WHERE mail= "' . $email . '"';
    $queryResult = mysqli_query($this->conn,$querySelect) ;
    if (mysqli_num_rows($queryResult)==0)
      return false;
    else {
      return true;
    }
  }

  public function getCorso(){
    $querySelect= "SELECT * FROM  corsi";
    $queryResult= mysqli_query ($this->conn,$querySelect) or die (mysqli_error($this->conn));
    if (mysqli_num_rows($queryResult)==0)
      return null;
    else{
      $result=array();
      while ($row=mysqli_fetch_assoc($queryResult)){
        $arrayCorso=array(
          'Id'=>$row['corsi_id'],
          'Titolo'=>$row['titolo'],
          'Descrizione'=>$row['descrizione']
        );
        array_push($result,$arrayCorso);
      }
      return $result;
    }
  }


  public function insertUser($nome,$cognome,$citta,$indirizzo,$nascita,$emailR,$passwordR){
    $query1 = "INSERT INTO anagrafica (nome, cognome, citta, indirizzo, nascita, mail) VALUES ('$nome','$cognome','$citta','$indirizzo','$nascita','$emailR')";
    $query2 = "INSERT INTO utenti (mail,password) VALUES ('$emailR','$passwordR')";
    $queryResult1 = mysqli_query($this->conn, $query1);
    $queryResult2 = mysqli_query($this->conn, $query2);
    if (mysqli_affected_rows($this->conn)==0){
      return false;
    }
    else{
      return true;
    }
  }


}
?>
