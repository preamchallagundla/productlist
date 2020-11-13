<?php 
  class Database {
    // DB Parameters
    private $host = 'mysql.wiu.edu';
    private $db_name = 'productlist';
    private $username = 'root';
    private $password = '7dib2vug';
    private $conn;

    // DB Connect
    public function connect() {
      $this->conn = null;

      try { 
        $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo 'Connection Error: ' . $e->getMessage();
      }

      return $this->conn;
    }
  }