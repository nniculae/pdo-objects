<?php

require_once 'ProductDao.php';
$db = new Database();
$products = new ProductDao($db);
//$prod = $products->getProductById(1);
$prod = $products->getAllProducts();
//var_dump($prod->prd_name);
echo json_encode($prod);