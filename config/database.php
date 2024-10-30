<?php
// config/database.php
class Database
{
    private $host = 'mdi.my.id';
    private $db_name = 'basdeat2_klp3';
    private $username = 'basdeat2_usr3';
    private $password = 'w!ZG]A,$D6jhUQ2=JM';
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
