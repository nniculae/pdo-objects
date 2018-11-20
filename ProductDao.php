<?php

//https://phpdelusions.net/pdo/objects

require_once 'DatabaseZes.php';
require_once 'ProductModel.php';


class ProductDao {

    /**
     * @var type \PDO
     */
    protected $pdo;
    
       

    function __construct(Database $db) {
        $this->pdo = $db->PDO;
        
    }
    /**
     * 
     * @param type $id
     * @return type ProductModel
     */
    public function getProductById($id) {

        $sql = "SELECT `productId`, `prd_name`, `prd_price`, `cat_id` FROM `products` WHERE `productId` = :id";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->setFetchMode(\PDO::FETCH_CLASS, 'ProductModel');
        $statement->execute();
       
        return  $statement->fetch();
      
       
    }
    
    /**
     * 
     * @return type array of ProductModel
     */
    public function getAllProducts() {

        $sql = "SELECT `productId`, `prd_name`, `prd_price`, `cat_id` FROM `products`";
        $statement = $this->pdo->prepare($sql);
        $statement->setFetchMode(\PDO::FETCH_CLASS, 'ProductModel');
        $statement->execute();
    
        return  $statement->fetchAll();
      
    }

}





