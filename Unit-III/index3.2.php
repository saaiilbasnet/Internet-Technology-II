<!-- Use `foreach` to print all keys and values of the `$product` array. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 3.2</title>
</head>
<body>

<?php

$product = ['Name'=>'Laptop','Price'=>'1200'];

foreach($product as $key => $value){
    echo "$key : $value"."<br>";
}


?>
    
</body>
</html>