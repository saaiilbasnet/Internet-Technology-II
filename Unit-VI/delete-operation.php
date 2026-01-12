<?php
require "../Unit-VI/database-connection.php";

$sql = "DELETE FROM books WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id',$id);
$id = 3;

$stmt->execute();
echo "Book deleted successfully!<br>";
?>