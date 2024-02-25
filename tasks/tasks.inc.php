<?php

if (isset($_POST['submit'])) {

    session_start();

    // Grabbing the data
    $taskName = $_POST['taskName'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $status = $_POST['status'];


    print_r($_SESSION);


    include "../connect_db/dbh.classes.php";
    include "tasks_classes.php";
    include "tasks-contr.classes.php";

    $task= new Tasks_classes ($taskName,$startDate,$endDate,$status);
    $task->set_tasks($taskName,$startDate,$endDate,$status);

    

}