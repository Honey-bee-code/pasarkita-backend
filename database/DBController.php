<?php

class DBController {
    // Database Connection Properties
    protected $host = 'localhost';
    protected $user = 'root';
    protected $pass = '';
    protected $database = 'pasarkita';

    // connection property
    public $conn = null;
    // call constructor
    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->database);
        if ($this->conn->connect_errno){
            echo "Gagal terkoneksi ke database".$this->conn->connect_error;
        } 
    }
}
