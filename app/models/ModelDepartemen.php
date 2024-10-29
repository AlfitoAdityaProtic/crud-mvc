<?php
// app/models/User.php
require_once '../config/database.php';

class DepartemenModels Extends Database {

    public function __construct() {
       parent::__construct();
    }

    public function tampilDepartemen() {
        $query = $this->conn->query("SELECT * FROM data_departemen");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function tambahDepartemen(){
        $query = $this->conn->query("INSERT INTO data_departemen (id_departemen, nama_departemen, job_desk) VALUES ('$_POST[id_departemen]', '$_POST[nama_departemen]', '$_POST[job_desk]')");
        return $query;
    }

    public function getDepartemenById($id_departemen) {
        $query = $this->conn->query("SELECT * FROM data_departemen WHERE id_departemen = '$id_departemen'");
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function updateDepartemen(){
        $query = $this->conn->query("UPDATE data_departemen SET nama_departemen = '$_POST[nama_departemen]', job_desk = '$_POST[job_desk]' WHERE id_departemen = '$_POST[id_departemen]'");
        return $query;
    }

    public function deleteDepartemen($id_departemen) {
        $query = $this->conn->query("DELETE FROM data_departemen WHERE id_departemen = '$id_departemen'");
        return $query;
    }
}
