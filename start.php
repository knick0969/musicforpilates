<?php

ini_set('display_errors', 'On');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views');
define('BASE_URL', 'http://localhost:8888');

$host = "localhost";
$user = "admin";
$password = "password";
$db_name = "musicforpilates";

$db = mysqli_connect($host, $user, $password, $db_name);

require 'functions.php';
?>