<?php
// app/models/User.php
require_once '../config/database.php';

class DataKaryawanModels extends Database {

    public function __construct() {
        parent::__construct();
    }

    public function tampilDataKaryawan() {
        $query = $this->conn->query("SELECT * FROM data_karyawan");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function tambahDataKaryawan() {
        $query = $this->conn->prepare("INSERT INTO data_karyawan (nama, jabatan, gaji, no_hp, email, id_karyawan, id_departemen, id_pelatihanKaryawan) VALUES (:nama, :jabatan, :gaji, :no_hp, :email, :id_karyawan, :id_departemen, :id_pelatihanKaryawan)");

        // Bind parameter
        $query->bindParam(':nama', $_POST['nama']);
        $query->bindParam(':jabatan', $_POST['jabatan']);
        $query->bindParam(':gaji', $_POST['gaji']);
        $query->bindParam(':no_hp', $_POST['no_hp']);
        $query->bindParam(':email', $_POST['email']);
        $query->bindParam(':id_karyawan', $_POST['id_karyawan']);
        $query->bindParam(':id_departemen', $_POST['id_departemen']);
        $query->bindParam(':id_pelatihanKaryawan', $_POST['id_pelatihanKaryawan']);

        return $query->execute();
    }

    public function getDataKaryawanById($id_karyawan) {
        $query = $this->conn->prepare("SELECT * FROM data_karyawan WHERE id_karyawan = :id");
        $query->bindParam(':id', $id_karyawan);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function updateDataKaryawan() {
        $query = $this->conn->prepare("UPDATE data_karyawan SET nama = :nama, jabatan = :jabatan, gaji = :gaji, no_hp = :no_hp, email = :email, id_karyawan = id_karyawan, id_departemen = :id_departemen, id_pelatihanKaryawan = :id_pelatihanKaryawan WHERE id_karyawan = :id");

        // Bind parameter
        $query->bindParam(':nama', $_POST['nama']);
        $query->bindParam(':jabatan', $_POST['jabatan']);
        $query->bindParam(':gaji', $_POST['gaji']);
        $query->bindParam(':no_hp', $_POST['no_hp']);
        $query->bindParam(':email', $_POST['email']);
        $query->bindParam(':id_karyawan', $_POST['id_karyawan']);
        $query->bindParam(':id_departemen', $_POST['id_departemen']);
        $query->bindParam(':id_pelatihanKaryawan', $_POST['id_pelatihanKaryawan']);
        $query->bindParam(':id', $_POST['id_karyawan']);

        return $query->execute();
    }

    public function deleteDataKaryawan($id_karyawan) {
        $query = $this->conn->prepare("DELETE FROM data_karyawan WHERE id_karyawan = :id");
        $query->bindParam(':id', $id_karyawan);
        return $query->execute();
    }

    public function getNamaKaryawan($id){
        $id_karyawan = $this->getDataKaryawanById($id);
        return $id_karyawan['nama'];
    }
}