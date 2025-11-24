<!-- Check if `'milk'` exists in `['bread', 'eggs']` and count the array elements.  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 3.12</title>
</head>
<body>

<?php

$items = ['bread','eggs'];

if(in_array('milk',$items)){
    echo "Milk exists! <br>";
}
else{
    echo "Milk not found! <br>";
}

echo "The total number of element in array : ".count($items);

?>
    
</body>
</html>