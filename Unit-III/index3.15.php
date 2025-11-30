<!-- Create a function `generateButton($text)` that prints an HTML button with the given text. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 3.15</title>
</head>
<body>

<?php

function generateButton($text) {
    echo "<button>$text</button>";
}
// Example call
generateButton("Click Me");

?>

    
</body>
</html>