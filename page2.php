<!DOCTYPE html>
<html>
<head>
  <title>User Details</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      text-align: center;
      margin-top: 100px;
    }

    h1 {
      color: #333;
    }

    .details-container {
      width: 300px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 4px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    }

    .details-container p {
      text-align: left;
    }
  </style>
</head>
<body>
  <h1>User Details</h1>
  
  <div class="details-container">
    <h2>Details from Page 1:</h2>
    <?php
      $username = $_POST['username'];
      $password = $_POST['password'];

      if ($username === 'root' && $password === '123') {
        $enteredUsername = $_POST['enteredUsername'];
        $enteredPassword = $_POST['enteredPassword'];
        echo "<p><strong>Entered Username:</strong> $enteredUsername</p>";
        echo "<p><strong>Entered Password:</strong> $enteredPassword</p>";
      } else {
        echo "<p>Invalid credentials</p>";
      }
    ?>
  </div>
</body>
</html>
