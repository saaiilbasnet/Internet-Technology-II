    <?php
require 'database-connection.php';
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$email' AND passwords = '$password'";
$result = $pdo->query($sql);

if($result->rowCount()>0){
    echo 'User logged in successfully!';
}else{
    echo "User login failed!";
}

?>