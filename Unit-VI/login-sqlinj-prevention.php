<?php
require "database-connection.php";
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE name = ? AND passwords = ?";

$stmt = $pdo->prepare($sql);
$stmt->execute([$username, $password]);

if($stmt->rowCount()>0){
    echo "Login Successful!";
}else{
    echo "Login Failed!";
}

?>