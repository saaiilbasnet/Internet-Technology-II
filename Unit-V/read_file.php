<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Readaing a File with readfile()</title>
</head>
<body>

<?php

$filename = "test.txt";

if(file_exists($filename) && is_file($filename) ){
    readfile(($filename));
    echo "<br>";
    echo "File read successfully!";
}else{
    echo "File not found!";
}

?>
    
</body>
</html>