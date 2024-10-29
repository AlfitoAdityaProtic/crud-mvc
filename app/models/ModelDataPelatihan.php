<?php
// app/models/User.php
require_once '../config/database.php';

class DataPelatihanModels Extends Database {

    public function __construct() {
       parent::__construct();
    }

    public function tampilDataPelatihan() {
        $query = $this->conn->query("SELECT * FROM data_pelatihan");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function tambahDataPelatihan(){
        $query = $this->conn->query("INSERT INTO data_pelatihan (id_pelatihan, nama, keterangan) VALUES ('$_POST[id_pelatihan]', '$_POST[nama]', '$_POST[keterangan]')");
        return $query;
    }

    public function getDataPelatihanById($id_pelatihan) {
        $query = $this->conn->query("SELECT * FROM data_pelatihan WHERE id_pelatihan = '$id_pelatihan'");
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function updateDataPelatihan(){
        $query = $this->conn->query("UPDATE data_pelatihan SET nama = '$_POST[nama]', keterangan = '$_POST[keterangan]' WHERE id_pelatihan = '$_POST[id_pelatihan]'");
        return $query;
    }

    public function deleteDataPelatihan($id_pelatihan) {
        $query = $this->conn->query("DELETE FROM data_pelatihan WHERE id_pelatihan = '$id_pelatihan'");
        return $query;
    }
}
