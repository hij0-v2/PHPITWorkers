<?php

namespace ITWorkersApp;

class Managers extends WorkerBase
{
    private $class;
    private $isGoodAtManaging;

    public function __construct($name, $lastName, $department, $salary, $class, $isGoodAtManaging)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->department = $department;
        $this->salary = $salary;
        $this->class = $class;
        $this->isGoodAtManaging = $isGoodAtManaging;
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
            "Managing position" => $this->class,
            "Good manager" => $this->isGoodAtManaging,
            "Comment" => $this->comment
        ];
    }
}
