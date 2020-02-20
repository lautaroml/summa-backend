<?php

namespace App\Core\Database;

use PDO;
use PDOException;

class Connection
{
    /**
     * Creamos un objeto PDO.
     *
     * @param array $config
     */
    public static function make($config)
    {
        try {
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
