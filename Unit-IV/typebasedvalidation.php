<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
</head>
<body>

<form action="#" method="POST">

<label for="email">Email : </label>
<input type="text" id="email" name="email"> <br> <br>

<label for="password">Password : </label>
<input type="password" id="password" name="password"> <br> <br>

<label for="phone">Phone : </label>
<input type="text" id="phone" name="phone"> <br> <br>

<label for="url">Profile URL : </label>
<input type="text" id="url" name="profile"> <br> <br>

<input type="submit" value="Register">

</form>

<?php

if($_SERVER["REQUEST_METHOD"]==="POST"){

if(!empty($_POST["email"])){

    $email = htmlspecialchars($_POST["email"]);

    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "Email: $email<br>";
    }else{
        echo "Invalid email!";
    }

}else{

    echo "Email field cannot be empty!<br>";

}

if(!empty($_POST["password"])){
    
    $password =  htmlspecialchars($_POST["password"]);
    echo "Password: $password<br>";

}else{

    echo "Password field empty!";

}

if(!empty($_POST["phone"])){
    $phone = htmlspecialchars($_POST["phone"]);

    if(filter_var($phone, FILTER_VALIDATE_INT)){
        echo "Phone: $phone<br>";
    }else{
        echo "Please enter valid phone number!<br>";
    }
}else{
    echo "Phone number field empty!<br>";
}

if(!empty($_POST["profile"])){

    $profileurl = htmlspecialchars($_POST["profile"]);

    if(filter_var($profileurl, FILTER_VALIDATE_URL)){
        echo "Profile URL : $profileurl<br>";
    }else{
        echo "Please enter valid url!<br>";
    }

}else{

    echo "URL field empty!<br>";

}

}

?>
    
</body>
</html>