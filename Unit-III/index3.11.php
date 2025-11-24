<!--  Sort `['orange', 'apple', 'banana']` alphabetically and sort `['c'=>3, 'a'=>1, 'b'=>2]` by keys. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 3.11</title>
</head>
<body>

<?php

$fruits = ['orange','apple','banana'];
$myArray = ['c'=>3,'a'=>1,'b'=>2];

sort($fruits);
ksort($myArray);

print_r($fruits);
echo "<br>";
print_r($myArray);

?>
    
</body>
</html>