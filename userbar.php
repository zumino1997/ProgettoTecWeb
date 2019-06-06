<?php

if (!isset($_SESSION["email"])){
  if ($_SESSION ['paginaCorr']=="registrazione"){
    echo "<div id=\"userBar\">";
    echo "<ul>";
    echo "<li id=\"currentLink2\">";
    echo "<span>Registrati</span>";
    echo "</li>";
    echo "<li>";
    echo "<a href=\"login.php\">Accedi</a>";
    echo "</li>";
    echo "</ul>";
    echo "</div>";
  }
  else if ($_SESSION ['paginaCorr']=="login") {
    echo "<div id=\"userBar\">";
    echo "<ul>";
    echo "<li>";
    echo "<a href=\"registrazione.php\">Registrati</a>";
    echo "</li>";
    echo "<li id=\"currentLink2\">";
    echo "<span>Accedi</span>";
    echo "</li>";
    echo "</ul>";
    echo "</div>";
  }
  else{
    echo "<div id=\"userBar\">";
    echo "<ul>";
    echo "<li>";
    echo "<a href=\"registrazione.php\">Registrati</a>";
    echo "</li>";
    echo "<li>";
    echo "<a href=\"login.php\">Accedi</a>";
    echo "</li>";
    echo "</ul>";
    echo "</div>";
  }
}
else{
  if ($_SESSION["email"]=="admin@admin.it"){
    if ($_SESSION ['paginaCorr']=="amministrazione"){
      echo "<div id=\"userBar\">";
      echo "<ul>";
      echo "<li id=\"currentLink2\">";
      echo "<span>Pannello</span>";
      echo "</li>";
      echo "<li>";
      echo "<a href=\"logout.php\" xml:lang=\"en\">Logout</a>";
      echo "</li>";
      echo "</ul>";
      echo "</div>";
    }
    else {
      echo "<div id=\"userBar\">";
      echo "<ul>";
      echo "<li>";
      echo "<a href=\"amministrazione.php\">Pannello</a>";
      echo "</li>";
      echo "<li>";
      echo "<a href=\"logout.php\" xml:lang=\"en\">Logout</a>";
      echo "</li>";
      echo "</ul>";
      echo "</div>";
    }
  }
  else {
    if ($_SESSION ['paginaCorr']=="profilo"){
      echo "<div id=\"userBar\">";
      echo "<ul>";
      echo "<li id=\"currentLink2\">";
      echo "<span>Profilo</span>";
      echo "</li>";
      echo "<li>";
      echo "<a href=\"logout.php\" xml:lang=\"en\">Logout</a>";
      echo "</li>";
      echo "</ul>";
      echo "</div>";
    }
    else{
      echo "<div id=\"userBar\">";
      echo "<ul>";
      echo "<li>";
      echo "<a href=\"profilo.php\">Profilo</a>";
      echo "</li>";
      echo "<li>";
      echo "<a href=\"logout.php\" xml:lang=\"en\">Logout</a>";
      echo "</li>";
      echo "</ul>";
      echo "</div>";
    }
  }
}

 ?>
