<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload or List the file</title>
</head>
<body>

<?php

$directory = "uploads";

$files = scandir($directory);

foreach($files as $file){
    echo $file."<br>";
}

?>
    
</body>
</html>