<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        

        .login-form {
            background-color: #e6e6e6;
            padding: 20px;
            display: inline-block;
            margin-top: 20px;
        }

        input[type="text"],
        input[type="password"] {
            padding: 8px;
            margin: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button[type="submit"] {
            padding: 8px 20px;
            margin: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #f2f2f2;
            cursor: pointer;
        }

        .navigation li {
            display: inline;
            margin: 10px;
        }

        .navigation a {
            text-decoration: none;
            color: #333;
        }

        .error-message {
            color: red;
        }
    </style>
</head>

<body>
    
    
    <div class="login-form">
        <h4>log IN</h4>
        <form action="login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username"><br>
            <input type="password" name="pwd" placeholder="Password"><br><br>
            <button type="submit" name="submit">Sign In</button>
        </form>
    </div>
</body>

</html>