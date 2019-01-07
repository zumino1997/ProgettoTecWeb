<?php

if (!isset($_SESSION["loggedIn"]) && !isset($_SESSION["email"])){
	header("Location: index.html");
	exit();
}

?>
