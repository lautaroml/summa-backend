<?php

namespace App\Services\Employees;

abstract class Employee
{
    public abstract function getType()  : string ;

    public function getId()
    {
        return $this->id;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getJob()
    {
        return $this->job;
    }
}