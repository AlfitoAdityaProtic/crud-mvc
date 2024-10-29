<?php
// config/database.php
class Database
{
    private $host = 'localhost';
    private $db_name = 'karyawan';
    private $username = 'root';
    private $password = '';
    private $conn;

    public function connect()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
        if ($this->conn->connect_error) {
            die("Koneksi Database Gagal : " . $this->conn->connect_error);
        }
        return $this->conn;
    }
}
