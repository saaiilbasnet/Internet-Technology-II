<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Session</title>
</head>
<body>

<?php

session_start(); //resumes the session

if(isset($_SESSION['username'])){
    echo "Welcome back, ".$_SESSION['username']."!<br>";
    echo "Your role is :  ".$_SESSION['role']."<br>";
}else{
    echo "You are not logged in!";
}

?>
    
</body>
</html>