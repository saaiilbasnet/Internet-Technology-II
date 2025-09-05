<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dynamic Content Below!</h1>
    <?php
    $name = "Saaiil";
echo "Hello World!";
print "<p>Hi, I am $name.</p>";
print " Today's Date :".date('Y-m-d');
date_default_timezone_set("Asia/Kathmandu");
print "<p> Current Time : ".date('H:i:s')."</p>";


?>
</body>
</html>