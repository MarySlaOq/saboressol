<?php

session_start();
$_SESSION["lang"] = $_GET["lang"];

header("location: index.php");

?>