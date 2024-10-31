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
        $data_karyawan= $this -> DepartemenModels -> tampilDepartemen() ;
        require_once '../app/views/karyawan/create.php'; // Pastikan view create ada
    }

    public function store() {
        $this->DataKaryawan->tambahDataKaryawan(); // Tambah data karyawan
        header('Location: index'); // Ganti URL setelah penyimpanan
        exit();
    }

    public function edit($id_karyawan) { 
        $data_departemen = $this ->DepartemenModels->tampilDepartemen();
        $data_karyawan = $this->DataKaryawan->getDataKaryawanById($id_karyawan); // Ambil data untuk edit
        require_once '../app/views/karyawan/edit.php'; // Pastikan view edit ada
    }

    public function update() {
        $this->DataKaryawan->updateDataKaryawan(); // Update data karyawan
        header('Location: /karyawan/index'); // Ganti URL setelah update
    }

    public function delete($id_karyawan){
        $this->DataKaryawan->deleteDataKaryawan($id_karyawan); // Hapus data karyawan
        header('Location: /karyawan/index'); // Ganti URL setelah hapus
    }
}