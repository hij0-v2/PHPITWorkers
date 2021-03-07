<?php

namespace ITWorkersApp;

abstract class WorkerBase
{
    protected $name;
    protected $lastName;
    protected $department;
    protected $salary;

    abstract public function addComment($comment);

    abstract public function showWorker();
}