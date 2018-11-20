<?php

/**
 * The Database Connection
 *
 * @author nicu
 */
class Database {
    
    
    const serverName = "localhost";
    const userName = "nicu";
    const password = "nicu";
    const databaseName = "zes";
    
    /**
     * @var type \PDO
     */
    public $PDO;

    function __construct() {
        
        $dataSourceName = sprintf("mysql:host=%s;dbname=%s", self::serverName, self::databaseName);
        try {
            $this->PDO = new PDO($dataSourceName, self::userName, self::password);
            // set the PDO error mode to exception
            $this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
  

}
