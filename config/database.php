<?php
// config/database.php
class Database
{
    private $host = 'localhost';
    private $db_name = 'basdeat2_klp3';
    private $username = 'root';
    private $password = '';
    protected $conn;

    public function __construct() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection error: " . $e->getMessage();
        }
    }
}