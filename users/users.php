<?php



    function getUsers()
{
    $username = "root";
    $password = "";
    $dbh = new PDO("mysql:host=localhost;dbname=tasks_project", $username, $password);

    $query = "SELECT * FROM users";
    // $query = "SELECT * FROM users WHERE users_id  = ?";
    $statement = $dbh->prepare($query);
    $statement->execute();
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $users;
}










