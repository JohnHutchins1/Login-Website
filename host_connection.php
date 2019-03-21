<?php

$host = "localhost";
$user = "root";
//password I used for my local phpmyadmin
$password = "MyGoodPassword";
$dbname = "MyAccounts";

//setting dsn to a default
$dsn = 'mysql:host=' . $host . ';dbname=mysql';

//creating a PDO connection
$pdo = new PDO($dsn, $user, $password);

//only use once to create the database, table, and insert records
//comment out after first run to avoid duplicate inserts
//------------------------------IMPORTANT!!!--------------------------
//include 'createQuery.php';

//setting dsn to a new object just incase this just created a new database
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
$pdo = new PDO($dsn, $user, $password);

?>