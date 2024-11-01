<?php
// app/controllers/UserController.php
require_once '../app/models/ModelKaryawan.php';
require_once '../app/models/ModelDepartemen.php';
require_once '../app/models/ModelAbsensi.php';

class DataKaryawan {
    private $KaryawanModel;
    private $DepartemenModel;
    private $AbsensiModel;

    public function __construct() {
        $this->KaryawanModel = new DataKaryawanModels();
        $this->DepartemenModel = new DepartemenModels();
        $this->AbsensiModel = new DataAbsensiModels();
    }

    public function index() {
        $DataKaryawan = $this->KaryawanModel->tampilKaryawan();
        require_once '../app/views/karyawan/index.php';

    }

    public function create() {
        $DataDepartemen = $this->DepartemenModel->tampilDepartemen();
        require_once '../app/views/karyawan/create.php';
        
    }

    public function store() {
        $this->KaryawanModel->tambahKaryawan();
        $_SESSION['flash_message'] = [
            'pesan' => 'Data Karyawan Berhasil Ditambahkan',
            'type' => 'success'
        ];
        header('location: index');
    }

    public function edit($id_karyawan) { 
        $DataDepartemen = $this->DepartemenModel->tampilDepartemen();
        $DataKaryawan = $this->KaryawanModel->getKaryawanById($id_karyawan);
        require_once '../app/views/karyawan/edit.php';
    }

    public function update() {
        $this->KaryawanModel->updateKaryawan();
        $_SESSION['flash_message'] = [
            'pesan' => 'Data Karyawan Berhasil Diubah',
            'type' => 'success'
        ];
        header('location: /karyawan/index');
    }

    // public function delete($id_karyawan){
    //     $DataKaryawan = $this->KaryawanModel->deleteKaryawan($id_karyawan);
    //     if ($DataKaryawan) {
    //         $_SESSION['error'] = 'Data Karyawan Masih Digunakan di absensi dan tidak bisa dihapus.';
    //         header('location: /karyawan/index');
    //     }else {
    //         $this->KaryawanModel->deleteKaryawan($id_karyawan);
    //         $_SESSION['success'] = 'Data Karyawan Berhasilh Dihapus';
    //         header('location: /karyawan/index');
    //     }
        
    // }
    public function delete($id_karyawan){
        $DataKaryawan = $this->AbsensiModel->KaryawanUse($id_karyawan);
        if ($DataKaryawan) {
            $_SESSION['flash_message'] = [
                'pesan' => 'Data Karyawan Tidak Bisa Dihapus karena Masih digunakan di Absensi',
                'type' => 'danger'
            ];
            header('location: /karyawan/index');
            exit();
        }else {
            $this->KaryawanModel->deleteKaryawan($id_karyawan);
            $_SESSION['flash_message'] = [
                'pesan' => 'Data Karyawan berhasil dihapus',
                'type' => 'success'
            ];
            header('location: /karyawan/index');
            exit();
        }
        
    }
}
