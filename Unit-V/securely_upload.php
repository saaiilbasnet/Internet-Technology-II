<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Securely upload files!</title>
</head>
<body>

<?php

$uploadDir = __DIR__ . '/../uploads/images/';

if($_SERVER['REQUEST_METHOD']==="POST"){
    if(isset($_FILES['image']) && $_FILES['image']['error']===0){
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

        if(in_array($_FILES['image']['type'], $allowedTypes)){
            $fileName = basename($_FILES['image']['name']);
            if(move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)){
                echo "File uploaded successfully!";
            }else{
                echo "Upload failed. Check permission!";
            }
        }else{
            echo "Only image files are allowed!";
        }

    }
}

?>
    
</body>
</html>