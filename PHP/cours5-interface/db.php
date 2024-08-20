<?php
// Pour la connection à la base de donnée
$dsn = 'mysql:dbname=viaformation_devoir;host=localhost';
$user = 'root';
$password = 'root';

$dbh = new PDO($dsn, $user, $password);
?>