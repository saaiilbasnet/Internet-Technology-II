<!--  Generate a random integer between 1 and 20 and round 5.678 to two decimal places. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 3.7</title>
</head>
<body>
    
<?php

$random_number = rand(1,20);
$rounded_number = round(5.678,2);

echo "Random Generated Number : ".$random_number."<br>";
echo "Rounded Number : ".$rounded_number."<br>";

?>
    
</body>
</html>