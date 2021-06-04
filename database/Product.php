<?php

class Product {

    public $db = null;

    public function __construct(DBController $db)
    {
        if(!isset($db->conn)) return null;
        $this->db = $db;
    }

    // fetch product data using getData method
    public function getData($table = 'product')
    {
        $result = $this->db->conn->query("SELECT * FROM {$table}");

        $resultArray = $result->fetch_all(MYSQLI_ASSOC);
        // $resultArray = $result->fetch_all();

        // while( $item = fetch_array($result)){
        //     $resultArray[$item];
        // }

        return $resultArray;
    }

}