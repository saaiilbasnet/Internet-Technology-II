<!-- 2.2 Use if…else to display “Even” if a number is divisible by 2, otherwise “Odd.”
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 2.2</title>
</head>
<body>

<?php

$number = 22;

if(($number % 2) == 0){
        echo "$number is even.";
}
else{
    echo "$number is odd.";
}


?>
    
</body>
</html>