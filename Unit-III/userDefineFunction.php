<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Define Function Demo</title>
</head>
<body>

<?php

function addNum($num1, $num2){
  return $num1 + $num2;

}

$sum = addNum(10,20);

echo "The sum of two numbers : ".$sum;


?>
    
</body>
</html>