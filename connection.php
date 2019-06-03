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
    $querySelect= 'SELECT mail FROM utenti WHERE mail= "' . $email . '" AND password="'. $psw .'"';
    $queryResult = mysqli_query($this->conn,$querySelect) or die (mysqli_error($this->conn));
    if (mysqli_num_rows($queryResult)==0)
      return false;
    else {
      return true;
    }
  }

  public function getUser2($email){
    $querySelect= 'SELECT mail FROM utenti WHERE mail= "' . $email . '"';
    $queryResult = mysqli_query($this->conn,$querySelect) or die (mysqli_error($this->conn));
    if (mysqli_num_rows($queryResult)==0)
      return false;
    else {
      return true;
    }
  }

  public function numCorsi(){
    $querySelect= "SELECT * FROM  corsi";
    $queryResult= mysqli_query ($this->conn,$querySelect) or die (mysqli_error($this->conn));
    return mysqli_num_rows($queryResult);
  }

  public function getCorsi($this_page_first_result,$results_per_page){
    $querySelect= 'SELECT * FROM  corsi LIMIT ' . $this_page_first_result . ',' .  $results_per_page .'';
    $queryResult= mysqli_query ($this->conn,$querySelect) or die (mysqli_error($this->conn));
    if (mysqli_num_rows($queryResult)==0)
      return null;
    else{
      $result=array();
      while ($row=mysqli_fetch_assoc($queryResult)){
        $arrayCorso=array(
          'Id'=>$row['corsi_id'],
          'Titolo'=>$row['titolo'],
          'Descrizione'=>$row['descrizione'],
          'Alt'=>$row['alt'],
          'Immagine'=>$row['immagine']
        );
        array_push($result,$arrayCorso);
      }
      return $result;
    }
  }

  public function getCorso(){
    $querySelect= 'SELECT * FROM  corsi WHERE corsi_id="'.$_GET['id'].'"';
    $queryResult= mysqli_query ($this->conn,$querySelect) or die (mysqli_error($this->conn));
    if (mysqli_num_rows($queryResult)==0)
      return null;
    else{
      while ($row=mysqli_fetch_assoc($queryResult)){
        $arrayCorso=array(
          'Id'=>$row['corsi_id'],
          'Titolo'=>$row['titolo'],
          'DescrizioneL'=>$row['descrizione_long'],
          'Alt'=>$row['alt'],
          'Immagine'=>$row['immagine']
        );
      }
      return $arrayCorso;
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

  public function numImg(){
    $querySelect= "SELECT * FROM  galleria";
    $queryResult= mysqli_query ($this->conn,$querySelect) or die (mysqli_error($this->conn));
    return mysqli_num_rows($queryResult);
  }

  public function getImg($this_page_first_result,$results_per_page){
    $querySelect= 'SELECT * FROM  galleria LIMIT ' . $this_page_first_result . ',' .  $results_per_page .'';
    $queryResult= mysqli_query ($this->conn,$querySelect) or die (mysqli_error($this->conn));
    if (mysqli_num_rows($queryResult)==0)
      return null;
    else{
      $result=array();
      while ($row=mysqli_fetch_assoc($queryResult)){
        $arrayGalleria=array(
          'Id'=>$row['id'],
          'Immagine'=>$row['immagine']
        );
        array_push($result,$arrayGalleria);
      }
      return $result;
    }
  }

  public function getNews(){
    $querySelect= 'SELECT * FROM  news';
    $queryResult= mysqli_query ($this->conn,$querySelect) or die (mysqli_error($this->conn));
    if (mysqli_num_rows($queryResult)==0)
      return null;
    else{
      $result=array();
      while ($row=mysqli_fetch_assoc($queryResult)){
        $arrayNews=array(
          'Immagine'=>$row['immagine'],
          'Id'=>$row['id'],
          'Titolo'=>$row['titolo'],
          'Testo'=>$row['testo'],
          'Alt'=>$row['alt'],
          'Data'=>$row['data']
        );
        array_push($result,$arrayNews);
      }
      return $result;
    }
  }



  public function insertCorsi($titolo,$testo,$fileToUpload,$testoLong,$alt){
    $query1 = "INSERT INTO corsi(titolo,descrizione,immagine,descrizione_long,alt) VALUES ('$titolo','$testo','$fileToUpload','$testoLong','$alt')";
    $queryResult1 = mysqli_query($this->conn, $query1);
    if (mysqli_affected_rows($this->conn)==0){
      return false;
    }
    else{
      return true;
    }
  }

  public function insertNews($titolo,$testo,$fileToUpload,$alt){
    $query1 = "INSERT INTO news(immagine,titolo,testo,alt) VALUES ('$fileToUpload','$titolo','$testo','$alt')";
    $queryResult1 = mysqli_query($this->conn, $query1);
    if (mysqli_affected_rows($this->conn)==0){
      return false;
    }
    else{
      return true;
    }
  }

  public function insertGalleria($testo,$fileToUpload,$alt){
    $query1 = "INSERT INTO galleria(immagine,alt,didascalia) VALUES ('$fileToUpload','$testo','$alt')";
    $queryResult1 = mysqli_query($this->conn, $query1);
    if (mysqli_affected_rows($this->conn)==0){
      return false;
    }
    else{
      return true;
    }
  }


  public function closeConnection()  {
    mysqli_close($this->conn);
  }
};
?>
