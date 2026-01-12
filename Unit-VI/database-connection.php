<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connection</title>
</head>
<body>

<?php
$host = "localhost";
$dbname = "php_test";
$username = "root";
$password = "";

// $dsn = "mysql:host=$host; dbname=$dbname; charset=UTF8";

try{

    $pdo = new PDO("mysql:host=$host; dbname=$dbname; charset=UTF8", $username, $password);
    $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connected successfully!<br>";

}catch(PDOException $e){
echo "Database connection failed: ".$e->getMessage()."<br>";
}

?>
    
</body>
</html>