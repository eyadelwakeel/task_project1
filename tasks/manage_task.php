<?php
  
  
  session_start();


  



include "../users/users.php";
include "../sign_up/signup.inc.php";





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .heart {
            color: red;
            font-size: 100px; 
        }
        .big {
            font-size: 120px; 
        }
    </style>
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

</style>

<div class="navbar">
  <a href="main.php" class="home">Home</a>
  <a href="../logout/logout.php" class="logout-btn">Log out</a>
</div> 
<h1> 
        <span class="big">
            <?php echo "Welcome " .$_SESSION["uid"]; ?>
        </span>
        <span class="heart">&hearts;</span>
    </h1>

    <button type="submit" name="submit" class="navbar" ><a><a href="add_task.php">Add Task</a></button>




</body>
</html>