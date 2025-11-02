<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Username Generator</title>
  <style>
    * {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      box-sizing: border-box;
    }

    body {
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(135deg, #6a11cb, #2575fc);
    }

    .card {
      width: 380px;
      background: #fff;
      border-radius: 15px;
      padding: 25px;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
      animation: fadeIn 0.5s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .title {
      font-size: 20px;
      font-weight: bold;
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .input_field {
      height: 40px;
      padding: 0 12px;
      border-radius: 8px;
      border: 1px solid #ddd;
      transition: 0.3s ease;
      font-size: 14px;
    }

    .input_field:focus {
      border-color: #2575fc;
      box-shadow: 0 0 5px rgba(37, 117, 252, 0.4);
      outline: none;
    }

    button {
      height: 40px;
      border: none;
      border-radius: 8px;
      background: linear-gradient(90deg, #6a11cb, #2575fc);
      color: #fff;
      font-size: 14px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s ease;
    }

    button:hover {
      background: linear-gradient(90deg, #2575fc, #6a11cb);
      transform: scale(1.03);
    }

    .result {
      margin-top: 20px;
      text-align: center;
      font-size: 15px;
      padding: 12px;
      border-radius: 8px;
      background: #f7f9fc;
    }

    .result strong {
      color: #2575fc;
    }

    .error {
      color: red;
      font-size: 14px;
    }
  </style>
</head>
<body>

  <div class="card">
    <div class="title">Username Generator</div>
    <form method="post" id="formid">
      <input type="text" name="first-name" placeholder="Enter your first name" class="input_field" required>
      <input type="text" name="last-name" placeholder="Enter your last name" class="input_field" required>
      <button type="submit">Generate</button>
    </form>

    <?php
      if ($_SERVER['REQUEST_METHOD'] == "POST") {
          $firstname = trim($_POST['first-name']);
          $lastname = trim($_POST['last-name']);

          echo "<div class='result'>";
          if (strlen($firstname) >= 3 && strlen($lastname) >= 3) {
              $username = strtolower(substr($firstname, 0, 3) . substr($lastname, 0, 3));
              echo "<strong>Your username:</strong> $username";
          } else {
              echo "<span class='error'>Both first and last names must be at least 3 letters long.</span>";
          }
          echo "</div>";
      }
    ?>
  </div>

</body>
</html>
