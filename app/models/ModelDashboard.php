<?php
// app/models/ModelDashboard.php
require_once '../config/database.php';

class ModelDashboard extends Database {
    public function __construct() {
        parent::__construct(); // Call the parent constructor to establish the database connection
    }

    // Method to get the total number of employees
    public function getTotalKaryawan() {
        $stmt = $this->conn->prepare("SELECT COUNT(*) AS total FROM data_karyawan");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['total'] : 0; // Return the total or 0 if not found
    }

    // Method to get the total number of departments
    public function getTotalDepartemen() {
        $stmt = $this->conn->prepare("SELECT COUNT(*) AS total FROM data_departemen");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['total'] : 0; // Return the total or 0 if not found
    }

    // Method to get the total number of training data
    public function getTotalDataPelatihan() {
        $stmt = $this->conn->prepare("SELECT COUNT(*) AS total FROM data_pelatihan");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['total'] : 0; // Return the total or 0 if not found
    }

}
?>
