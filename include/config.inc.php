<?php

use Medoo\Medoo;

@session_start();
if (!isset($_SESSION['lingua_site'])) {
    $_SESSION['lingua_site'] = 'pt';
}

$URL_WEBSITE = "localhost/saboressol/";
$DIR_WEBSITE = "C:\wamp64\www\saboressol";

include_once './include/medoo.php';
include_once './include/helpers.inc.php';

$database = new Medoo([
    // [required]
    'type' => 'mysql',
    'host' => '127.0.0.1',
    'database' => 'saboresol',
    'username' => 'root',
    'password' => 'naovaisvais1010',


    'port' => 3306,

    // [optional] To enable logging. It is disabled by default for better performance.
    'logging' => true,

    // [optional]
    // Error mode
    // Error handling strategies when the error has occurred.
    // PDO::ERRMODE_SILENT (default) | PDO::ERRMODE_WARNING | PDO::ERRMODE_EXCEPTION
    // Read more from https://www.php.net/manual/en/pdo.error-handling.php.
    'error' => PDO::ERRMODE_EXCEPTION,

]);
