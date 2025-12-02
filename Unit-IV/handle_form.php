<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handle PHP</title>
</head>
<body>

<?php

$errors = [];

if(isset($_POST["user_name"])){
    $errors[] = "Name field is invalid!";
}else{
    $name = $_POST["user_name"];
}

if(empty($errors)){
    echo "Name : $name<br>";
}else{
    foreach($errors as $e){
        echo "$e<br>";
    }
}

?>
    
</body>
</html>