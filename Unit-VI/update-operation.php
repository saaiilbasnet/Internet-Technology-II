<?php
require "../Unit-VI/database-connection.php";

$sql = "UPDATE books SET price = :price WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':price', $price);
$stmt->bindParam(':id', $id);

$price = 24.99;
$id = 1;

$stmt->execute();

echo "Book updated successfully! <br>";

?>