<?php

session_start();
$_SESSION["email"] = "";
$_SESSION["loggedIn"]= false;
session_unset();
session_destroy();
header("Location: index.html");
exit();



 ?>
