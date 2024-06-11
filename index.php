<?php

require_once 'vendor/autoload.php';

use App\Config\Database;
use App\Controllers\ProductController;

$database = new Database();
$db = $database->getConnection();

$controller = new ProductController($db);
$controller->list();
