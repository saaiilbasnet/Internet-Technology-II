<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 1.7</title>
</head>
<body>

<?php 

/* 1.7 Initialize $score = 0 and update it by adding 100, subtracting 25, then doubling the result using compound assignment operators, echoing after
each step. */

$score = 0;
echo "Initial score : ".$score."<br>";

$score += 100;
echo "After adding 100 : ".$score."<br>";

$score -= 25;
echo "After substracting 25 : ".$score."<br>";

$result = $score * 2;
echo "Doubled the score : ".$result."<br>";

?>
    
</body>
</html>