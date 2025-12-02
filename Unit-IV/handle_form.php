<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handle PHP</title>
</head>
<body>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!empty($_POST["user_name"])) {
        $name = htmlspecialchars($_POST["user_name"]);
        echo "Name: $name";
    } else {
        echo "Name field empty!";
    }

} else {
    echo "Form not submitted!";
}



?>
    
</body>
</html>