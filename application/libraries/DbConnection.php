<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DbConnection {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli('localhost', 'your_db_username', 'your_db_password', 'school_db');

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function close() {
        $this->conn->close();
    }
}