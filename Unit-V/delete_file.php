<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete File</title>
</head>
<body>

<?php

$filename = "./uploads/testfile.txt";

if(file_exists($filename)){
    unlink($filename);
    echo "File deleted successfully!";
}else{
    echo "File doesnot exist!";
}

?>
    
</body>
</html>