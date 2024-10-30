<?php
// app/models/User.php
require_once '../config/database.php';

class DataAbsensiModels extends Database {

    public function __construct() {
        parent::__construct();
    }

    public function tampilAbsensi() {
        $query = $this->conn->prepare("SELECT absensi_karyawan.id_absensi, absensi_karyawan.tanggal_dan_waktu, absensi_karyawan.status, absensi_karyawan.keterangan, 
                                               data_karyawan.nama, data_karyawan.jabatan, data_karyawan.no_hp, data_karyawan.email, data_karyawan.id_departemen
                                        FROM absensi_karyawan
                                        JOIN data_karyawan ON absensi_karyawan.id_karyawan = data_karyawan.id_karyawan");
        $query->execute(); // Eksekusi query
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function tambahAbsensi() {
        $query = $this->conn->prepare("INSERT INTO absensi_karyawan (id_karyawan, tanggal_dan_waktu, status, keterangan) VALUES (:id_karyawan, :tanggal_dan_waktu, :status, :keterangan)");
        // Bind parameter
        $query->bindParam(':id_karyawan', $_POST['id_karyawan']);
        $query->bindParam(':tanggal_dan_waktu', $_POST['tanggal_dan_waktu']);
        $query->bindParam(':status', $_POST['status']);
        $query->bindParam(':keterangan', $_POST['keterangan']);
        return $query->execute();
    }

    public function getAbsensiById($id_absensi) {
        $query = $this->conn->prepare("SELECT * FROM absensi_karyawan WHERE id_absensi = :id_absensi");
        $query->bindParam(':id_absensi', $id_absensi);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function updateAbsensi() {
        $query = $this->conn->prepare("UPDATE absensi_karyawan SET tanggal_dan_waktu = :tanggal_dan_waktu, status = :status, keterangan = :keterangan WHERE id_absensi = :id_absensi");
        // Bind parameter
        $query->bindParam(':tanggal_dan_waktu', $_POST['tanggal_dan_waktu']);
        $query->bindParam(':status', $_POST['status']);
        $query->bindParam(':keterangan', $_POST['keterangan']);
        $query->bindParam(':id_absensi', $_POST['id_absensi']);
        return $query->execute();
    }

    public function deleteAbsensi($id_absensi) {
        $query = $this->conn->prepare("DELETE FROM absensi_karyawan WHERE id_absensi = :id_absensi");
        $query->bindParam(':id_absensi', $id_absensi);
        return $query->execute();
    }
}