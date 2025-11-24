<!-- Call `calculateVAT(100, 0.15)` and explain why a global `$discount = 10` isn't directly accessible inside it.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 3.14</title>
</head>
<body>

<?php

// Global variable
$discount = 10; 

function calculateVAT($amount, $rate){
    // Calculate VAT properly
    $total = $amount + ($amount * $rate);

    echo "Amount including VAT: $total<br>";

    // $discount is NOT accessible here unless imported
    echo "Global discount is NOT accessible inside the function directly.<br><br>";

    /*
        EXPLANATION:
        Variables declared outside a function are GLOBAL.
        Variables inside a function are LOCAL.
        A function cannot access global variables unless you explicitly import them using:
            global $discount;
        or by using:
            $GLOBALS['discount']

        This is why the global variable $discount = 10 cannot be accessed inside the function directly.
    */
}

calculateVAT(100, 0.15);

?>
    
</body>
</html>
