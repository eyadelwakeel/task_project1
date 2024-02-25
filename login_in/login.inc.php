<?php

if (isset($_POST['submit'])) {

    // Grabbing the data
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];



    // Instantiate loginController class
    include "../connect_db/dbh.classes.php";
    include "login.classes.php";
    include "login-contr.classes.php";

    
    $login = new loginContr($uid, $pwd);

    // Running error handlers and user login
    $login->LogInUser();

    // Going back to front page
    header("location: ../index.php?error=succes");
}