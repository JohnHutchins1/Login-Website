<?php
//create the database if it doesn't exist
$query = "CREATE DATABASE IF NOT EXISTS " . $dbname;
$stmt = $pdo->exec($query);

//setting dsn to a default and creating a link to our newly created database
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
$pdo = new PDO($dsn, $user, $password);

$query = "CREATE TABLE IF NOT EXISTS accounts (
    account_id int NOT NULL AUTO_INCREMENT,
    username VARCHAR(255),
    pass VARCHAR(255),
    UNIQUE (username),
    PRIMARY KEY(account_id)
)";

$stmt = $pdo->exec($query);

echo "database successfully created" . "<br>";

include 'insertQuery.php';

?>