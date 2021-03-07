<?php

namespace ITWorkersApp;

class Testers extends WorkerBase
{
    private $position;
    private $isReliable;

    public function __construct($name, $lastName, $department, $salary, $position, $isReliable)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->department = $department;
        $this->salary = $salary;
        $this->position = $position;
        $this->isReliable = $isReliable;
    }

    public function addComment($comment)
    {
        $this->comment = $comment;
    }

    public function showWorker()
    {
        return [
            "Name" => $this->name,
            "Last name" => $this->lastName,
            "Department" => $this->department,
            "Salary" => $this->salary,
            "Tester's position" => $this->position,
            "Reliable tester" => $this->isReliable,
            "Comment" => $this->comment
        ];
    }
}