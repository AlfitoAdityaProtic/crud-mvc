<?php
// app/models/ModelDashboard.php
require_once '../config/database.php';

class ModelDashboard extends Database {
    public function __construct() {
        parent::__construct(); // Memanggil konstruktor parent untuk menghubungkan ke database
    }

    // Mendapatkan total karyawan
    public function getTotalKaryawan() {
        $stmt = $this->conn->prepare("SELECT COUNT(*) AS total FROM data_karyawan");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['total'] : 0;
    }

    // Mendapatkan total departemen
    public function getTotalDepartemen() {
        $stmt = $this->conn->prepare("SELECT COUNT(*) AS total FROM data_departemen");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['total'] : 0;
    }

    // Mendapatkan total data pelatihan
    public function getTotalDataPelatihan() {
        $stmt = $this->conn->prepare("SELECT COUNT(*) AS total FROM data_pelatihan");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['total'] : 0;
    }

    // Mendapatkan total pelatihan karyawan
    public function getTotalPelatihanKaryawan() {
        $stmt = $this->conn->prepare("SELECT COUNT(*) AS total FROM pelatihan_karyawan");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['total'] : 0;
    }

    // Mendapatkan total absensi karyawan
    public function getTotalAbsensiKaryawan() {
        $stmt = $this->conn->prepare("SELECT COUNT(*) AS total FROM absensi_karyawan");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['total'] : 0;
    }
}
?>
