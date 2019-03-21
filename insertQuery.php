<?php

//hashing initial passwords 
$jPassword = password_hash("GoodFellow123", PASSWORD_DEFAULT);
$cPassword = password_hash("Password123", PASSWORD_DEFAULT);

$query = "INSERT INTO accounts (username, pass)
VALUES 
('John123', ?)";

//two lines for execute 
$stmt = $pdo->prepare($query);
$stmt->execute([$jPassword]);


$query = "INSERT INTO accounts (username, pass)
VALUES 
('Chase123', ?)";

//one line execute 
$stmt = $pdo->prepare($query)->execute([$cPassword]);

?>