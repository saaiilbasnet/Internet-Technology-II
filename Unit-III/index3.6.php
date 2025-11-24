<!-- 6. Convert the string `"tag1,tag2,tag3"` to an array and back to `"tag1 | tag2 | tag3"`. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 3.6</title>
</head>
<body>

<?php

$tags = "tag1,tag2,tag3";
$myArray = explode(',',$tags);

$result = implode('|',$myArray);

echo "Array Format : <br>";
foreach($myArray as $x){
    echo "$x<br>";
}

echo "String format with '|'".'<br>';
echo "$result<br>";

?>

    
</body>
</html>