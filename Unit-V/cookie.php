<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookies</title>
</head>
<body>

<?php

setcookie("username","Saaiil",time()+(7*24*60*60),"/"); //set the cookie

echo "Cookie has been set. <br>";
?>
    
</body>
</html>