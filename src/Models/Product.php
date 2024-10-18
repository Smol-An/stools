<?php

namespace App\Models;

class Product
{
    private $conn;
    private $table_name = "products";

    public $id;
    public $name;
    public $price;
    public $collection_id;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
        $query = "SELECT p.id, p.name, p.price, c.name as collection_name 
                  FROM " . $this->table_name . " p
                  LEFT JOIN collections c ON p.collection_id = c.id
                  ORDER BY c.name, p.name";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
