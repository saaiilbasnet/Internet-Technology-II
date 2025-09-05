<?php

$quantity = 30;  //Buying 30 weights
$price = 119.95;
$taxrate = .05;  //5% sales taxes

//calculate the total 

$total = $quantity * $price;
$total = $total + ($total * $taxrate);

echo "<p> Total : ".$total."</p>";

//increment counter

$counter = 10;
echo "<p>Inital Counter: ".$counter."</p>";

//increased by 1

$counter++;
echo "<p>Final Counter: ".$counter."</p>";

// Assignment Operators

$message = "Hello";

$message .= ",World!"; //concate and assign

echo "<p>".$message."</p>";

$score = 100;
$score += 50;

echo "<p> Score : ".$score."</p>";

// Logical Operators

$age = 35;
$isStudent = true;

if($age > 18 && $isStudent){
    echo "<p>Eligible for student discount.</p>";

    
}

$rolledSix = false;
$rolledFive = true;

if($rolledSix || $rolledFive){
    echo "<p>You win! (rolled a 5 or 6).</p>";
}

$isEmpty = false;

if(!$isEmpty){
    echo "<p>The variable is not empty.</p>";
}

$username = $_GET['user'] ?? 'Guest';

echo "<p>Welcome, ".$username ."!</p>";

?>