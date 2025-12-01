<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>

    <style>

        fieldset{
            width: 200px;
            height: 250px;
        }

        body{
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

    </style>

</head>
<body>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $dob = $_POST["date"];

    echo "Name : $name<br>";
        echo "Email : $email<br>";
            echo "Gender : $gender<br>";
                echo "Date of Birth : $dob<br>";

}

?>

<fieldset>
    <legend>Registration Form</legend>
<form action="#" method="POST">

<label for="name">Name : </label>
<input type="text" id="name" name="name" required>
<br> <br>
<label for="email">Email : </label>
<input type="email" id="email" name="email" required>
<br><br>

<label>Gender:</label>
        <select name="gender" required>
            <option value="" disabled selected>-- Select Gender --</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
<br><br>
        <label for="date">Date : </label>
    <input type="date" id="date" name="date" required>

    <br><br>
    <button type="submit">submit</button>

</form>
    </fieldset>
</body>
</html>