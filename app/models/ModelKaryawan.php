<?php
// app/models/User.php
require_once '../config/database.php';

class DataKaryawanModels extends Database {

    public function __construct() {
        parent::__construct();
    }

    public function tampilDataKaryawan() {
        $query = $this->conn->query("SELECT data_karyawan.id_karyawan, data_karyawan.nama, data_karyawan.jabatan, data_karyawan.gaji, data_karyawan.noHP, data_karyawan.email, data_karyawan.id_departemen,
                                            data_departemen.nama_departemen, data_departemen.job_desk
                                     FROM data_karyawan
                                     JOIN data_departemen ON data_karyawan.id_departemen = data_departemen.id_departemen");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    } 
    

    public function tambahDataKaryawan() {
        $query = $this->conn->query("INSERT INTO data_karyawan (nama, jabatan, gaji, noHP, email, id_departemen) 
        VALUES ( '$_POST[nama]', '$_POST[jabatan]','$_POST[gaji]', '$_POST[noHP]','$_POST[email]', '$_POST[id_departemen]')");
    }

    public function getDataKaryawanById($id_karyawan) {
        $query = $this->conn->query("SELECT * FROM data_karyawan WHERE id_karyawan = '$id_karyawan'");
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function updateDataKaryawan() {
        $query = $this->conn->query("UPDATE data_karyawan SET nama = '$_POST[nama]', jabatan = '$_POST[jabatan]', noHP = '$_POST[noHP]', email = '$_POST[email]', id_departemen = '$_POST[id_departemen]'
        WHERE id_karyawan = '$_POST[id_karyawan]'");
        return $query;
    }

    public function deleteDataKaryawan($id_karyawan) {
        $query = $this->conn->query("DELETE FROM data_karyawan WHERE id_karyawan = '$id_karyawan'");
        return $query;
    }
}