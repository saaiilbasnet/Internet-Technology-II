    <?php
require 'database-connection.php';
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE name = '$username' AND passwords = '$password'";
$result = $pdo->query($sql);

if($result->rowCount()>0){
    echo 'User logged in successfully!';
}else{
    echo "User login failed!";
}

?>