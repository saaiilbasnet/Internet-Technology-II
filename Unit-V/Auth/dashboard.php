<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

<?php

session_start();

if(!isset($_SESSION['user_id'])){
    header(('Location: login.php'));
    exit;
}

echo "Welcome, ".$_SESSION['username']."!<br>";

if($_SESSION['role']==='admin'){
    echo "You have admin privileges. You can edit or delete content.";
}else{
    echo "You are a regular user. LImited access granted!";
}

?>

<a href="logout.php">Logout</a>
    
</body>
</html>