<?php

namespace App\Services\Employees;

class Developer extends Employee
{
    protected $id;
    protected $first_name;
    protected $last_name;
    protected $age;
    protected $job;

    const TYPE = 'Programador';

    public function __construct($id, $first_name, $last_name, $age, $job)
    {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
        $this->job = $job;
    }

    public function getType()   : string
    {
        return self::TYPE;
    }
}