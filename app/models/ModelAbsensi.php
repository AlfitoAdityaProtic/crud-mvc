<?php
// app/models/User.php
require_once '../config/database.php';

class DataAbsensiModels Extends Database {

    public function __construct() {
       parent::__construct();
    }

    public function tampilAbsensi() {
        $query = $this->conn->query("SELECT absensi_karyawan.id_absensi, absensi_karyawan.tanggal_dan_waktu, absensi_karyawan.status, absensi_karyawan.keterangan, 
                                        data_karyawan.nama, data_karyawan.jabatan, data_karyawan.noHP, data_karyawan.email, data_karyawan.id_departemen
                                 FROM absensi_karyawan
                                 JOIN data_karyawan ON absensi_karyawan.id_karyawan = data_karyawan.id_karyawan");
    return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function tambahAbsensi(){
        $query = $this->conn->query("INSERT INTO absensi_karyawan (id_karyawan, tanggal_dan_waktu, status, keterangan) VALUES ('$_POST[id_karyawan]','$_POST[tanggal_dan_waktu]','$_POST[status]', '$_POST[keterangan]')");
        return $query;
    }

    public function getAbsensiById($id_absensi) {
        $query = $this->conn->query("SELECT * FROM absensi_karyawan WHERE id_absensi = '$id_absensi'");
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function updateAbsensi(){
        $query = $this->conn->query("UPDATE absensi_karyawan SET tanggal_dan_waktu = '$_POST[tanggal_dan_waktu]', status = '$_POST[status]', keterangan = '$_POST[keterangan]' WHERE id_absensi = '$_POST[id_absensi]'");
        return $query;
    }

    public function deleteAbsensi($id_absensi) {
        $query = $this->conn->query("DELETE FROM absensi_karyawan WHERE id_absensi = '$id_absensi'");
        return $query;
    }
}
