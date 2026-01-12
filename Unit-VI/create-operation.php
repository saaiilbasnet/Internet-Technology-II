<?php
require "../Unit-VI/database-connection.php";
$sql = "INSERT INTO books(
title,
author,
price
)VALUES(
:title,
:author,
:price
)";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':title', $title);
$stmt->bindParam(':author', $author);
$stmt->bindParam(':price', $price);

$title = "Learning PHP";
$author = "Saaiil Basnet";
$price = 29.99;

$stmt->execute();

echo "Book added successfully!<br>";

?>