<?php
class Tasks_classes extends Dbh
{
    private $taskName;
    private $startDate;
    private $endDate;
    private $status;

    public function __construct($taskName, $startDate, $endDate, $status)
    {
        $this->taskName = $taskName;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->status = $status;
    }

    public function set_tasks($taskName, $startDate, $endDate, $status)
    {
        try {
            $stmt = $this->connect()->prepare("INSERT INTO tasks (users_id,task_name, start_date, end_date, status) VALUES ($_SESSION[uid],?, ?, ?, ?)");
            // $stmt = $this->connect()->prepare("INSERT INTO tasks (users_id,task_name, start_date, end_date, status) VALUES (1,?, ?, ?, ?)");
            $stmt->execute([$taskName, $startDate, $endDate, $status]);
            $stmt = null; // Close statement
        } catch (PDOException $e) {
            // Handle exception
            // throw new Exception("Database error: " . $e->getMessage()); // throw exception
            // Or handle the error as appropriate for your application
            echo "Database error: " . $e->getMessage();
            exit();
        }
    }
}
