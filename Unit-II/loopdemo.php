<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Demo</title>
</head>
<body>

<?php 

$j = 0;
$k = 0;

$cars = array("Tesla", "BMW", "Audi");

for($i = 0; $i<10; $i++){
    echo "This is for loop.($i)<br>";
}

echo "<br><br>";

while($j<10){
    echo "This is while loop.($j)<br>";
    $j++;
}

echo "<br><br>";

do{
    echo "This is do while.($k)<br>";
    $k++;
}while($k<10);

echo "<br><br>";

foreach($cars as $c){
    echo "$c <br>";
}

?>
    
</body>
</html>