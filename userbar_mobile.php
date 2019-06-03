<?php

if (!isset($_SESSION["email"])){
echo "<li><a href=\"registrazione.php\">Registrati</a></li>";
echo "<li><a href=\"login.php\" xml:lang=\"en\">Login</a></li>";
}
else{
  if ($_SESSION["email"]=="admin@admin.it"){
    echo "<li><a href=\"amministrazione.php\">Pannello</a></li>";
    echo "<li><a href=\"logout.php\" xml:lang=\"en\">Logout</a></li>";
  }
  else {
    echo "<li><a href=\"profilo.php\">Profilo</a></li>";
    echo "<li><a href=\"logout.php\" xml:lang=\"en\">Logout</a></li>";
  }
}

 ?>
