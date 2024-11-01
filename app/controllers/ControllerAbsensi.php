<?php
// app/controllers/UserController.php
require_once '../app/models/ModelAbsensi.php';
require_once '../app/models/ModelKaryawan.php';

class DataAbsensi {
    private $AbsensiModel;
    private $KaryawanModel;

    public function __construct() {
        $this->AbsensiModel = new DataAbsensiModels();
        $this->KaryawanModel = new DataKaryawanModels();
    }

    public function index() {
        $DataAbsensi = $this->AbsensiModel->tampilAbsensi();
        require_once '../app/views/absensi/index.php';
    }

    public function create() {
        $DataKaryawan = $this->KaryawanModel->tampilKaryawan();
        require_once '../app/views/absensi/create.php';
    }

    public function store() {
        $this->AbsensiModel->tambahAbsensi();
        $_SESSION['flash_message'] = [
            'pesan' => 'Data Absensi Berhasil Ditambahkan',
            'type' => 'success'
        ];
        header('location: index');
    }

    public function edit($id_absensi) {  
        $DataKaryawan = $this->KaryawanModel->tampilKaryawan();
        $DataAbsensi = $this->AbsensiModel->getAbsensiById($id_absensi);
        require_once '../app/views/absensi/edit.php';
    }

    public function update() {
        $this->AbsensiModel->updateAbsensi();
        $_SESSION['flash_message'] = [
            'pesan' => 'Data Absensi Berhasil Diubah',
            'type' => 'success'
        ];
        header('location: /absensi/index');
    }

    public function delete($id_absensi){
        $this->AbsensiModel->deleteAbsensi($id_absensi);
        header('location: /absensi/index');
    }
}
