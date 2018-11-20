<?php

class ProductModel{
    // It must have the same nama in de DB
    public $productId;
    public $prd_name;
    public $prd_price;
    public $cat_id;
    
    function __construct() {
        settype($this->productId, 'integer');
    }
}