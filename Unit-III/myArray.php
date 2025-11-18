<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Demo</title>
</head>
<body>

<?php

// creating a custom array

// $myArray = array("Saaiil","Raj","Anjal","Bijay","Satyam","Bardan");

$myArray = ["one",2,3];
$myArrayDynamic = [];

$myArrayDynamic[0] = "one";
$myArrayDynamic[1] = 2;
$myArrayDynamic[2] = 3;


echo "Displaying all the elements from array : <br>";

foreach($myArray as $x){
    echo "$x<br>";
}

echo "<br>Printing only needed indexed elements : <br>";

echo $myArray[0]."<br>";
echo $myArray[1]."<br>";
echo $myArray[2]."<br>";

echo "<br>Displaying all the elements from dynamic array : <br>";

foreach($myArrayDynamic as $y){
    echo "$y<br>";
}

?>
    
</body>
</html>