<?php
@session_start();
if (!isset($_SESSION['lingua_site'])) {
    $_SESSION['lingua_site'] = 'pt';
}

$URL_WEBSITE = "localhost/saboressol/";
$DIR_WEBSITE = "C:\wamp64\www\saboressol";

include_once './include/db.class.php';
include_once './include/helpers.inc.php';
