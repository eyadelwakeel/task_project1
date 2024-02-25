<?php

if (isset($_POST['submit'])) {

    session_start();

    // Grabbing the data
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdrepeat'];
    $email = $_POST['email'];



    $_SESSION["uid"]=$uid;
    $_SESSION["pwd"]=$pwd;
    $_SESSION["pwdrepeat"]=$pwdRepeat;
    $_SESSION["email"]=$email;

    $added_task=$_SESSION['added_task'];
    $done_task=$_SESSION['done_task'];
    $not_done_task=$_SESSION['not_done_task'];
    $deleted_task=$_SESSION['deleted_task'];
    

    // Instantiate singupController class
    include "../connect_db/dbh.classes.php";
    include "../sign_up/signup.classes.php";
    include "../sign_up/signup-contr.classes.php";


    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);

    // Running error handlers and user signup
    // $signup->signUpUser();
    $signup->signUpUser();

    // Going back to front page
    // header("location: ../index.php?error=succes");
    header("location: ../tasks/main.php");
}