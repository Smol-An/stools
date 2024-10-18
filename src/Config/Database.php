<?php

namespace App\Config;

use PDO;
use PDOException;

class Database
{
    private $conn;

    public function getConnection() {
        $this->conn = null;    
        $config = include __DIR__ . '/database_config.php';

        try {
            $this->conn = new PDO(
                "pgsql:host=" . $config['host'] . ";dbname=" . $config['db_name'], 
                $config['username'], 
                $config['password']
            );
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
