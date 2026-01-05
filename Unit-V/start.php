<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Demo</title>
</head>
<body>

<?php

session_start();  //starts the session

$_SESSION['username'] = 'Saaiil ';
$_SESSION['role'] = 'admin ';

echo "Session has been set. <br>";
echo "Username: ".$_SESSION['username']."<br>";
echo "Role: ".$_SESSION['role']."<br>";

?>
    
</body>
</html>