<?php

$host = "localhost";
$user = "root";
$dbname = "ezroomy";

$dsn = "mysql:host=".$host."; dbname=".$dbname;

$pdo = new PDO($dsn,$user);

?>