<?php

session_start();
$_SESSION["email"] = "";
session_unset();
session_destroy();
header("Location: ../HTML/index.php");
exit();

 ?>
