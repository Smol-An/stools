<?php

namespace App\Controllers;

use App\Models\Product;
use App\Models\Collection;

class ProductController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function list() {
        $collection = new Collection($this->db);
        $product = new Product($this->db);

        $collections = $collection->read()->fetchAll(\PDO::FETCH_ASSOC);
        $products = $product->read()->fetchAll(\PDO::FETCH_ASSOC);

        include __DIR__ . '/../views/product_list.php';
    }
}
