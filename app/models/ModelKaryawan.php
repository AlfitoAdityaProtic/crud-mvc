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

    public function tambahDataKaryawan($id_karyawan, $nama, $jabatan, $gaji, $noHP, $email, $id_departemen) {
        $stmt = $this->conn->prepare("SELECT COUNT(*) FROM data_karyawan WHERE id_karyawan = :id_karyawan");
        $stmt->execute(['id_karyawan' => $id_karyawan]);
        $count = $stmt->fetchColumn();
        if($count < 1){
            $query = $this->conn->prepare("
            INSERT INTO data_karyawan (id_karyawan, nama, jabatan, gaji, noHP, email, id_departemen) 
            VALUES (:id_karyawan, :nama, :jabatan, :gaji, :noHP, :email, :id_departemen)
        ");
        $query->bindParam(':id_karyawan', $id_karyawan);
        $query->bindParam(':nama', $nama);
        $query->bindParam(':jabatan', $jabatan);
        $query->bindParam(':gaji', $gaji);
        $query->bindParam(':noHP', $noHP);
        $query->bindParam(':email', $email);
        $query->bindParam(':id_departemen', $id_departemen);
        $query->execute();
        return 1;
        }else{
            return 0;
        }
       
    }
    
    public function getDataKaryawanById($id_karyawan) {
        $query = $this->conn->prepare("SELECT * FROM data_karyawan WHERE id_karyawan = :id");
        $query->bindParam(':id', $id_karyawan);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

        // app/models/ModelKaryawan.php
        public function updateDataKaryawan($id_karyawan, $nama, $jabatan, $gaji, $noHP, $email, $id_departemen) {
            $query = $this->conn->prepare("UPDATE data_karyawan 
                SET nama = :nama, 
                    jabatan = :jabatan,  # Ada kesalahan disini sebelumnya
                    gaji = :gaji, 
                    noHP = :noHP, 
                    email = :email, 
                    id_departemen = :id_departemen  # Hapus koma terakhir
                WHERE id_karyawan = :id_karyawan"); # Hapus koma sebelum WHERE
            
            $query->bindParam(':id_karyawan', $id_karyawan);
            $query->bindParam(':nama', $nama);
            $query->bindParam(':jabatan', $jabatan);
            $query->bindParam(':gaji', $gaji);
            $query->bindParam(':noHP', $noHP);
            $query->bindParam(':email', $email);
            $query->bindParam(':id_departemen', $id_departemen);
            
            return $query->execute();
        }

        public function deleteDataKaryawan($id_karyawan) {
            // Cek apakah ada data terkait di tabel absensi_karyawan
            $query = $this->conn->prepare("SELECT COUNT(*) FROM absensi_karyawan WHERE id_karyawan = :id");
            $query->bindParam(':id', $id_karyawan);
            $query->execute();
            $relatedDataExists = $query->fetchColumn() > 0;
        
            if ($relatedDataExists) {
                // Jika ada data terkait, kembalikan false
                return false; 
            } else {
                // Jika tidak ada data terkait, hapus data karyawan
                $query = $this->conn->prepare("DELETE FROM data_karyawan WHERE id_karyawan = :id");
                $query->bindParam(':id', $id_karyawan);
                $query->execute();
                return true; // Kembalikan true jika berhasil dihapus
            }
        }
        
        

    public function getNamaKaryawan($id){
        $id_karyawan = $this->getDataKaryawanById($id);
        return $id_karyawan['nama'];
    }
}