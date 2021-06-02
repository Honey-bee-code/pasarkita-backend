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
            echo "<div class='text-center text-danger my-5'><h1>Gagal terkoneksi ke database !</h1><h4>".$this->conn->connect_error."</h4></div>";
            exit();
        } 
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    // for mysqli closing connection
    protected function closeConnection()
    {
        if($this->conn != null){
            $this->conn->close();
            $this->conn = null;
        }
    }
}
