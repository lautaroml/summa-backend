<?php

namespace App\Services\Employees;

class EmployeeFactory
{
    public static function build(\stdClass $employee): Employee
    {
        $employee = self::getEmployeeType($employee);

        return $employee;
    }

    private static function getEmployeeType($employee)
    {
        switch ($employee->type) {
            case 'developer':
                return new Developer(
                    $employee->id,
                    $employee->first_name,
                    $employee->last_name,
                    $employee->age,
                    $employee->job
                );
                break;
            case 'designer':
                return new Designer(
                    $employee->id,
                    $employee->first_name,
                    $employee->last_name,
                    $employee->age,
                    $employee->job
                );
                break;
            default:
                throw new InvalidArgumentException('Unknown Employee type!');
                break;
        }
    }
}