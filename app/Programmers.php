<?php

namespace ITWorkersApp;

class Programmers extends WorkerBase{
    private $quickProgramming;
    private $timeProgramming;

    public function __construct($name, $lastName, $department, $salary, $quickProgramming, $timeProgramming){
        $this->name = $name;
        $this->lastName = $lastName;
        $this->department = $department;
        $this->salary = $salary;
        $this->quickProgramming = $quickProgramming;
        $this->timeProgramming = $timeProgramming;
    }

    public function addComment($comment)
    {
        $this->comment = $comment;
    }

    public function showWorker()
    {
        return[
            "Name" => $this->name,
            "Last name" =>$this->lastName,
            "Department" =>$this->department,
            "Salary" =>$this->salary,
            "Quickness" =>$this->quickProgramming,
            "How long programming for" =>$this->timeProgramming,
            "Comment" =>$this->comment
        ];
    }
}