<!-- Securely display the HTML string `"<p>Hello World!</p>"` b-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 3.5</title>
</head>
<body>

<?php

$message = "Hello World!";

echo "<p>".htmlspecialchars($message,ENT_QUOTES,'UTF-8')."</p";

?>

</body>
</html>