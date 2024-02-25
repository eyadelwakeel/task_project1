<?php
session_start();
// include "get_data_from_users_table.php";
// include "../users/users.php";
// include "../sign_up/signup.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    .navbar {
background-color: #007bff;
padding: 10px 20px;
display: flex;
justify-content: space-between;
}

.navbar a {
color: #ffffff;
text-decoration: none;
font-size: 18px;
padding: 10px 20px;
border-radius: 5px;
transition: background-color 0.3s ease;
}

.navbar a:hover {
background-color: #0056b3;
}

.home {
background-color: #0056b3;
}
.logout-btn {
background-color: #dc3545;
}
.signup-form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .signup-form h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .signup-form input[type="text"],
        .signup-form input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .signup-form button[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4caf50;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .signup-form button[type="submit"]:hover {
            background-color: #45a049;
        }
</style>
<div class="navbar">
<a href="main.php" class="home">Home</a>
<a href="../logout/logout.php" class="logout-btn">Log out</a>
</div> 



<div class="signup-form">
        <h1>Add New Task To <?php echo $_SESSION["uid"] ?></h1>
        <form action="tasks.inc.php" method="post">
            <label for="taskName">Name:</label>
            <input type="text" id="taskName" name="taskName" placeholder="Task Name">
            <br>
            <label for="startDate">Start Date:</label>
            <input type="date" id="startDate" name="startDate" placeholder="">
            <br>
            <label for="endDate">End Date:</label>
            <input type="date" id="endDate" name="endDate" placeholder="">
            <br>
            <label for="status">Status:</label>
            <input type="text" id="status" name="status" placeholder="">
            <br><br>
            <button type="submit" name="submit">Add Task</button>
        </form>
    </div>
   <!-- <?php  echo $done_task ?> -->

</body>
</html>
