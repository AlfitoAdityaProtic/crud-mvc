<?php
// app/controllers/UserController.php
require_once '../app/models/ModelKaryawan.php';
require_once '../app/models/ModelDepartemen.php';

class DataKaryawan {
    private $DataKaryawan;
    private $DepartemenModels;
    
    public function __construct() {
        $this->DataKaryawan = new DataKaryawanModels(); // Pastikan class ini sesuai dengan model yang Anda buat
        $this->DepartemenModels = new DepartemenModels(); // Pastikan class ini sesuai dengan model yang Anda buat
    }

    public function index() {
        $data_karyawan = $this->DataKaryawan->tampilDataKaryawan(); // Ambil data karyawan
        require_once '../app/views/karyawan/index.php'; // Sesuaikan path view
    }

    public function create() {
        $data_departement = $this->DepartemenModels->tampilDepartemen();
        require_once '../app/views/karyawan/create.php'; // Pastikan view create ada
    }
 
    public function store() {
        $id_karyawan = $_POST['id_karyawan'];
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $gaji = $_POST['gaji'];
        $noHP = $_POST['noHP'];
        $email = $_POST['email'];
        $id_departemen = $_POST['id_departemen'];
        $check = $this->DataKaryawan->tambahDataKaryawan($id_karyawan, $nama, $jabatan, $gaji, $noHP, $email, $id_departemen); // Panggil metode dengan parameter lengkap
        session_start();
        if ($check == 1) {
            $_SESSION['message'] = 'Data Karyawan berhasil ditambahkan.'; // Simpan pesan sukses di session
        } else {
            $_SESSION['message'] = 'Data Karyawan gagal ditambahkan.'; // Simpan pesan gagal di session
        }
      
        header('Location: /karyawan/index'); // Redirect setelah penyimpanan
        exit();
    }    
 
    public function edit($id_karyawan) {  
        $data_karyawan = $this->DataKaryawan->getDataKaryawanById($id_karyawan); // Ambil data untuk edit
        $data_departement = $this->DepartemenModels->tampilDepartemen();
        require_once '../app/views/karyawan/edit.php'; // Pastikan view edit ada
    }

    public function update() {
        // Ambil data dari form
        $id_karyawan = $_POST['id_karyawan'];
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $gaji = $_POST['gaji'];
        $noHP = $_POST['noHP'];
        $email = $_POST['email'];
        $id_departemen = $_POST['id_departemen'];
    
        // Panggil fungsi update dengan parameter
        $this->DataKaryawan->updateDataKaryawan($id_karyawan, $nama, $jabatan, $gaji, $noHP, $email, $id_departemen);
        
        // Redirect ke halaman index setelah update
        header('Location: /karyawan/index');
        exit();
    }    

    public function delete($id_karyawan) {
        session_start();
        
        // Hapus data karyawan dan simpan hasilnya
        $deleted = $this->DataKaryawan->deleteDataKaryawan($id_karyawan);
    
        if ($deleted) {
            $_SESSION['message'] = "Data karyawan berhasil dihapus."; // Pesan sukses
        } else {
            $_SESSION['message'] = "Data karyawan tidak dapat dihapus karena masih ada data absensi terkait."; // Pesan error
        }
    
        header('Location: /karyawan/index'); // Ganti URL setelah hapus
        exit();
    }    
    
}