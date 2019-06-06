<?php

if (!isset($_SESSION["email"])){
echo "<div id=\"userBar\">";
echo "<ul>";
echo "<li>";
echo "<span><i class=\"far fa-user-circle\" alt=\"user\"></i></span>";
echo "<a href=\"registrazione.php\">Registrati</a>";
echo "</li>";
echo "<li>";
echo "<span><i class=\"far fa-user-circle\" alt=\"user\"></i></span>";
echo "<a href=\"login.php\">Accedi</a>";
echo "</li>";
echo "</ul>";
echo "</div>";
}
else{
  if ($_SESSION["email"]=="admin@admin.it"){
    if ($_SESSION ['paginaCorr']="amministrazione"){
      echo "<div id=\"userBar\">";
      echo "<ul>";
      echo "<li>";
      echo "<span id=\"currentLink2\"><i class=\"far fa-user-circle\" alt=\"user\"></i></span>";
      echo "<a href=\"amministrazione.php\">Pannello</a>";
      echo "</li>";
      echo "<li>";
      echo "<span><i class=\"far fa-user-circle\" alt=\"user\"></i></span>";
      echo "<a href=\"logout.php\" xml:lang=\"en\">Logout</a>";
      echo "</li>";
      echo "</ul>";
      echo "</div>";
    }
    else {
      echo "<div id=\"userBar\">";
      echo "<ul>";
      echo "<li>";
      echo "<span id=\"prova\"><i class=\"far fa-user-circle\" alt=\"user\"></i></span>";
      echo "<a href=\"amministrazione.php\">Pannello</a>";
      echo "</li>";
      echo "<li>";
      echo "<span><i class=\"far fa-user-circle\" alt=\"user\"></i></span>";
      echo "<a href=\"logout.php\" xml:lang=\"en\">Logout</a>";
      echo "</li>";
      echo "</ul>";
      echo "</div>";
    }
  }
  else {
    echo "<div id=\"userBar\">";
    echo "<ul>";
    echo "<li>";
    echo "<span><i class=\"far fa-user-circle\" alt=\"user\"></i></span>";
    echo "<a href=\"profilo.php\">Profilo</a>";
    echo "</li>";
    echo "<li>";
    echo "<span><i class=\"far fa-user-circle\" alt=\"user\"></i></span>";
    echo "<a href=\"logout.php\" xml:lang=\"en\">Logout</a>";
    echo "</li>";
    echo "</ul>";
    echo "</div>";
  }
}

 ?>
