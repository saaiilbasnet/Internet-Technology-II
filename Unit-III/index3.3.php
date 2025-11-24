<!-- 3. Given `$users = [['id' => 1, 'name' => 'Bob'], ['id' => 2, 'name' => 'Alice']]`, display the name "Alice". -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 3.3</title>
</head>
<body>

<?php

$users = [['id'=>1,
            'name'=>'Bob'],[
                'id'=>2,
                'name'=>'Alice'
            ]];

            echo $users[1]['name'];


 ?>

</body>
</html>