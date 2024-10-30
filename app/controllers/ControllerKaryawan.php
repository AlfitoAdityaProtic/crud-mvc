<?php
// app/controllers/UserController.php
require_once '../app/models/ModelKaryawan.php';
require_once '../app/models/ModelDepartemen.php';
require_once '../app/models/ModelPelatihanKaryawan.php';

class DataKaryawan {
    private $DataKaryawan;
    private $DepartemenModels;
    private $PelatihanKaryawanModels;

    public function __construct() {
        $this->DataKaryawan = new DataKaryawanModels(); // Pastikan class ini sesuai dengan model yang Anda buat
        $this->DepartemenModels = new DepartemenModels(); // Pastikan class ini sesuai dengan model yang Anda buat
        $this->PelatihanKaryawanModels = new PelatihanKaryawanModels(); // Pastikan class ini sesuai dengan model yang Anda buat
    }

    public function index() {
        $data_karyawan = $this->DataKaryawan->tampilDataKaryawan(); // Ambil data karyawan
        require_once '../app/views/karyawan/index.php'; // Sesuaikan path view
    }

    public function create() {
        require_once '../app/views/karyawan/create.php'; // Pastikan view create ada
    }

    public function store() {
        $this->DataKaryawan->tambahDataKaryawan(); // Tambah data karyawan
        header('Location: /karyawan/index'); // Ganti URL setelah penyimpanan
        exit();
    }

    public function edit($id_karyawan) {  
        $data_karyawan = $this->DataKaryawan->getDataKaryawanById($id_karyawan); // Ambil data untuk edit
        require_once '../app/views/karyawan/edit.php'; // Pastikan view edit ada
    }

    public function update() {
        $this->DataKaryawan->updateDataKaryawan(); // Update data karyawan
        header('Location: /karyawan/index'); // Ganti URL setelah update
        exit();
    }

    public function delete($id_karyawan){
        $this->DataKaryawan->deleteDataKaryawan($id_karyawan); // Hapus data karyawan
        header('Location: /karyawan/index'); // Ganti URL setelah hapus
        exit();
    }
}