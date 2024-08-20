<?php
/*
Crée une base de données MySQL nommée test_db.
Crée une table users avec les colonnes id 
(int, auto-increment, primary key),
 nom (varchar),
  et email (varchar).
Écrire un script PHP utilisant PDO pour se connecter 
à la base de données test_db.
*/
$dsn = 'mysql:dbname=test_db;host=localhost';
$user = 'root';
$password = '';

$dbh = new PDO($dsn, $user, $password);
