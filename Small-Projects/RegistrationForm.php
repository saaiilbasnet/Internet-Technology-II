<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
                body {
            background: #eef2f3;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            padding-top: 40px;
            color: #333;
        }

        .form-container {
            background: #ffffff;
            padding: 25px;
            width: 350px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #4a5568;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
            color: #333;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border-radius: 8px;
            border: 1px solid #cbd5e0;
            background: #f7fafc;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #63b3ed;
        }

        .btn {
            width: 100%;
            margin-top: 20px;
            padding: 12px;
            border: none;
            background-color: #63b3ed;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #4299e1;
        }

        .result {
            background: #ffffff;
            padding: 20px;
            width: 350px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.1);
            margin-bottom: 25px;
            color: #2d3748;
        }

        .result h2 {
            text-align: center;
            color: #2b6cb0;
        }
    </style>
</head>
<body>
<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name   = htmlspecialchars($_POST["name"]);
    $email  = htmlspecialchars($_POST["email"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $dob    = htmlspecialchars($_POST["dob"]);

    echo "<div class='result'>
            <h2>Form Submitted Successfully.</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Gender:</strong> $gender</p>
            <p><strong>Date of Birth:</strong> $dob</p>
          </div>";
}
?>
<div class="form-container">
    <h2>Registration Form</h2>

    <form method="POST">
        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Gender:</label>
        <select name="gender" required>
            <option value="" disabled selected>-- Select Gender --</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>

        <label>Date of Birth:</label>
        <input type="date" name="dob" required>

        <button class="btn" type="submit">Submit</button>
    </form>

    </div>
    
</body>
</html>