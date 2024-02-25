<?php

class tasks_Contr extends Tasks_classes
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


}


