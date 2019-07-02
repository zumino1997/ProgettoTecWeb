<?php

if (!isset($_SESSION["email"])){
  if ($_SESSION ['paginaCorr']=="registrazione"){
    echo "<li id=\"currentLink\">Registrati</li>";
    echo "<li><a href=\"login.php\" xml:lang=\"en\">Login</a></li>";
  }
  else if ($_SESSION ['paginaCorr']=="login"){
    echo "<li><a href=\"registrazione.php\">Registrati</a></li>";
    echo "<li id=\"currentLink\" xml:lang=\"en\">Login</li>";
  }
  else{
    echo "<li><a href=\"registrazione.php\">Registrati</a></li>";
    echo "<li><a href=\"login.php\" xml:lang=\"en\">Login</a></li>";
  }
}
else{
  if ($_SESSION["email"]=="admin@admin.it"){
    if ($_SESSION ['paginaCorr']=="amministrazione"){
      echo "<li id=\"currentLink\">Pannello</li>";
      echo "<li><a href=\"../PHP/logout.php\" xml:lang=\"en\">Logout</a></li>";
    }
    else{
      echo "<li><a href=\"amministrazione.php\">Pannello</a></li>";
      echo "<li><a href=\"../PHP/logout.php\" xml:lang=\"en\">Logout</a></li>";
    }
  }
  else {
    if ($_SESSION ['paginaCorr']=="profilo"){
      echo "<li id=\"currentLink\">Profilo</li>";
      echo "<li><a href=\"../PHP/logout.php\" xml:lang=\"en\">Logout</a></li>";
    }
    else{
      echo "<li><a href=\"profilo.php\">Profilo</a></li>";
      echo "<li><a href=\"../PHP/logout.php\" xml:lang=\"en\">Logout</a></li>";
    }
  }
}

 ?>
