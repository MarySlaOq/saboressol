<?php
@session_start();
if (!isset($_SESSION['lingua_site'])) {
    $_SESSION['lingua_site'] = 'pt';
}

$URL_WEBSITE = "localhost/saboressol/";
$DIR_WEBSITE = "C:\wamp64\www\saboressol";


?>