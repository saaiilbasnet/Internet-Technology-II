<!-- Format the number `1500000.5` as `"1,500,000.50"`. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 3.8</title>
</head>
<body>

<?php

$number = 1500000.5;

$formatted_number = number_format($number,2);

echo "$formatted_number";

?>
    
</body>
</html>