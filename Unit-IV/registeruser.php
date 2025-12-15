<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
</head>
<body>

<fieldset>
    <legend>Enter your details.</legend>
<form action="#" method="POST">

<label for="username">Username: </label>
<input type="text" id="username" value="<?php 
   echo isset($_POST["username"]) ? htmlspecialchars($_POST["username"]) : "" ;
?>" name="username" required> <br> <br>

<label for="email">Email: </label>
<input type="email" id="email" name="email" value="<?php 
   echo isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "" ;
?>" required> <br> <br>

<label for="password">Password: </label>
<input type="password" id="password" name="password" value="<?php 
   echo isset($_POST["password"]) ? htmlspecialchars($_POST["password"]) : "" ;
?>" required> <br> <br>

<input type="submit" id="btn" value="Register">

</form>
   </fieldset> 
   </body>

   <?php

   if($_SERVER["REQUEST_METHOD"]==="POST"){


    if(!empty($_POST["username"]) && isset($_POST['username'])){
        $username = htmlspecialchars($_POST['username']);
        echo "Username : $username <br>";
    }else{
        echo "Username field empty! <br>";
    }

        if(!empty($_POST["email"]) && isset($_POST['email'])){
        $email = htmlspecialchars($_POST['email']);
        echo "Email : $email <br>";
    }else{
        echo "Email field empty! <br>";
    }

        if(!empty($_POST["password"]) && isset(($_POST['password']))){
        $password = htmlspecialchars($_POST['password']);
        echo "Password : $password <br>";
    }else{
        echo "Passowrd field empty! <br>";
    }

   }

   ?>
</body>
</html>