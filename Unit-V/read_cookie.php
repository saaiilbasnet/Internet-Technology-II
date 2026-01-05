<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Cookies</title>
</head>
<body>

<?php

if(isset($_COOKIE['username'])){
    echo "Welcome back, ".$_COOKIE['username'];
}else{
    echo "Cookie not found!";
}

?>
    
</body>
</html>