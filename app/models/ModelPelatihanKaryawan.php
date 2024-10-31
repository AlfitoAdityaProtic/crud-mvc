<?php

require_once '../config/database.php';

class PelatihanKaryawanModels extends Database {

    public function __construct() {
        parent::__construct();
    }

    public function tampil_data() {
        $query = $this->conn->query("SELECT * FROM pelatihan_karyawan");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDataPelatihanById($id_pelatihanKaryawan) {
        $query = $this->conn->prepare("SELECT * FROM pelatihan_karyawan WHERE id_pelatihanKaryawan = :id");
        $query->bindParam(':id', $id_pelatihanKaryawan);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function tambah_data($id_pelatihanKaryawan, $id_karyawan, $id_pelatihan, $tanggal, $keterangan) {
        $stmt = $this->conn->prepare("SELECT COUNT(*) FROM pelatihan_karyawan WHERE id_pelatihanKaryawan = :id_pelatihanKaryawan");
        $stmt->execute(['id_pelatihanKaryawan' => $id_pelatihanKaryawan]);
        $count = $stmt->fetchColumn();
        
    
        if ($count < 1) {
            $query = $this->conn->prepare("INSERT INTO pelatihan_karyawan (id_pelatihanKaryawan, id_karyawan, id_pelatihan, tanggal, keterangan) VALUES (:id_pelatihanKaryawan, :id_karyawan, :id_pelatihan, :tanggal, :keterangan)");
            $query->bindParam(':id_pelatihanKaryawan', $id_pelatihanKaryawan);
            $query->bindParam(':id_karyawan', $id_karyawan);
            $query->bindParam(':id_pelatihan', $id_pelatihan);
            $query->bindParam(':tanggal', $tanggal);
            $query->bindParam(':keterangan', $keterangan);
            $query->execute();
            return 1;
        }else{
            return 0;
        }
    }

    public function edit_data($id_pelatihanKaryawan, $id_karyawan, $id_pelatihan, $tanggal, $keterangan) {
    
        $query = $this->conn->prepare("UPDATE pelatihan_karyawan 
        SET id_karyawan = :id_karyawan, 
            id_pelatihan = :id_pelatihan,  # Ada kesalahan disini sebelumnya
            tanggal = :tanggal, 
            keterangan = :keterangan  
        WHERE id_pelatihanKaryawan = :id_pelatihanKaryawan"); # Hapus koma sebelum WHERE
            $query->bindParam(':id_pelatihanKaryawan', $id_pelatihanKaryawan);
            $query->bindParam(':id_karyawan', $id_karyawan);
            $query->bindParam(':id_pelatihan', $id_pelatihan);
            $query->bindParam(':tanggal', $tanggal);
            $query->bindParam(':keterangan', $keterangan);
            return $query->execute();
    }
    
    public function hapus_data($id_pelatihanKaryawan) {
        $query = $this->conn->prepare("DELETE FROM pelatihan_karyawan WHERE id_pelatihanKaryawan=:id");
        $query->bindParam(':id', $id_pelatihanKaryawan);
        return $query->execute();
    }

    public function getKeteranganPelatihanKaryawan($id){
        $id_pelatihanKaryawan = $this->getDataPelatihanById($id);
        return $id_pelatihanKaryawan['keterangan'];  
    }
}
