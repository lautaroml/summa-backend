<?php

namespace App\Core\Database;

use App\Services\Employees\EmployeeFactory;
use PDO;

class QueryBuilder
{
    /**
     * La instancia de PDO.
     *
     * @var PDO
     */
    protected $pdo;

    /**
     * Creamos una nueva instancia.
     *
     * @param PDO $pdo
     */
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Select * from table.
     *
     * @param string $table
     * @return array
     */
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $this->getEmployees($statement);
    }

    /**
     * Insert into table.
     *
     * @param  string $table
     * @param  array  $parameters
     */
    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (\Exception $e) {
            //
        }
    }


    /**
     * Get AVG Age.
     *
     * @param string $table
     * @return string
     */
    public function getAvgAge($table)
    {
        $statement = $this->pdo->prepare("select AVG(age) as avg from {$table}");

        $statement->execute();

        $avg =  $statement->fetchAll(PDO::FETCH_CLASS);

        return $avg[0]->avg;
    }

    /**
     * Select resource from table.
     *
     * @param string $table
     * @param $id int
     * @return array
     */
    public function selectById($table, $id)
    {
        $sql = sprintf(
            'select * from %s where id = (%e)',
            $table,
            $id
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute([$id]);
        } catch (\Exception $e) {
            //
        }

        return $this->getEmployees($statement);

    }

    private function getEmployees($statement)
    {
        $employees = [];

        foreach ($statement->fetchAll(PDO::FETCH_CLASS) as $employee) {
            $employees[] = EmployeeFactory::build($employee);
        }

        return $employees;
    }
}
