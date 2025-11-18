<!-- 1. Create an associative array `$product` with `'name' => 'Laptop'` and `'price' => 1200`, then display its price. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 3.1b</title>
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