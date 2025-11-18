<!-- 13. Define a function `calculateVAT($amount, $rate)` that returns the amount including VAT. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 3.13</title>
</head>
<body>

<?php

function calculateVAT($amount, $rate){

    return ($amount * $rate) + (13/100)*($amount * $rate);

}

$amount = 100;
$rate = 10;

$toatalWithVATAmount = calculateVAT($amount, $rate);

echo "Amount with VAT : ".$toatalWithVATAmount;

?>
    
</body>
</html>