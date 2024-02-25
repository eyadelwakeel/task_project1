


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Button Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .button-container {
      text-align: center;
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      border-radius: 5px;
      background-color: #007bff;
      color: #ffffff;
      font-size: 16px;
      text-decoration: none;
      margin: 0 10px;
      transition: background-color 0.3s ease;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #0056b3;
    }

    .title {
      font-size: 24px;
      margin-bottom: 20px;
    }
  </style>
</head>

<body>

  <div class="button-container">
    <div class="title">Make your task</div>
    <button class="btn"><a><a href="sign_up/enter_sign_up.php">Sign UP</a></button>
    <button class="btn"><a><a href="login_in/enter_log_in.php">Login In</a></button>
  </div>
</body>

</html>

