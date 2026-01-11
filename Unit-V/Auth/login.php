<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<?php
session_start();
require './user.php';

if($_SERVER['REQUEST_METHOD']==='POST'){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $found = false;

    foreach($users as $user){
        if($user['username']===$username && password_verify($password,$user['password'])){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            $found = true;
            header('Location: dashboard.php');
            exit;
        }
    }

    if(!$found){
        echo "Invalid username or password!";
    }

}

?>

<form action="#" method="post">

<fieldset>
    <legend>Login Here</legend>
    <label for="username">Username</label>
<input type="text" id="username" name="username"> <br><br>

<label for="password">Password</label>
<input type="password" id="password" name="password"> <br><br>

<input type="submit" value="Login" id="btn">
</fieldset>

</form>
    
</body>
</html>