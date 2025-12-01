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

    $errors = [];

    // $email = $_POST["email"];
    // $gender = $_POST["gender"];
    // $dob = $_POST["date"];

    if(empty($_POST["name"])){
        $errors[] = "Name field is empty!";
    }else{
        $name = $_POST["name"];
    }

        if(empty($_POST["email"])){
        $errors[] = "Email field is empty!";
    }else{
        $email = $_POST["email"];
    }

        if(empty($_POST["gender"])){
        $errors[] = "Gender field is empty!";
    }else{
        $gender = $_POST["gender"];
    }

        if(empty($_POST["date"])){
        $errors[] = "DOB field is empty!";
    }else{
        $dob = $_POST["date"];
    }

if(empty($errors)){
        echo "Name : $name<br>";
        echo "Email : $email<br>";
            echo "Gender : $gender<br>";
                echo "Date of Birth : $dob<br>";
}
else{
    foreach($errors as $e){
        echo "$e<br>";
    }
}

}

?>

<fieldset>
    <legend>Registration Form</legend>
<form action="#" method="POST" id="myForm">

<label for="name">Name : </label>
<input type="text" id="name" name="name">
<br> <br>
<label for="email">Email : </label>
<input type="email" id="email" name="email">
<br><br>

<label>Gender:</label>
        <select name="gender">
            <option value="" disabled selected>-- Select Gender --</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
<br><br>
        <label for="date">Date : </label>
    <input type="date" id="date" name="date">

    <br><br>
    <button type="submit">submit</button>

</form>
    </fieldset>
</body>
<script>

    document.getElementById("myForm").addEventListener("submit",(event)=>{
        let name = document.getElementById("name").value.trim();
         let email = document.getElementById("email").value.trim();
        let gender = document.getElementById("gender").value;
        let date = document.getElementById("date").value;

        let errors = [];
            //name validation
        if(name == ""){
           return errors.push("Name field empty!");
        }

        if(name.length < 3){
          return errors.push("Name should be longer or equals to 3 characters!");
        }
        //email validation

        if(email==""){
           return errors.push("Email field is invalid");
        }
        
        // gender validation

        if(gender==""){
           return errors.push("Gnder field is empty!");
        }

        //date validation

        if(date==""){
            return errors.push("Date field is empty!");
        }

        //errors displays

        if(errors.length>0){
            event.preventDefault();
            alert(errors.join("\n"));
        }

    })

</script>
</html>