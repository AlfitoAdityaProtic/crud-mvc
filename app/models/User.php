<?php
// app/models/User.php
require_once '../config/database.php';

class User {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllUsers() {
        $query = $this->db->query("SELECT * FROM data_pelatihan");
        return $query;
    }

    function insertDataPelatihan($data){
        $query = "INSERT INTO data_pelatihan (id_pelatihan, nama, keterangan) VALUES (:id_pelatihan, :nama, :keterangan)";

        return $query;
    }
}
