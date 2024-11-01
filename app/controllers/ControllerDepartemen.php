<?php
// app/controllers/UserController.php
require_once '../app/models/ModelDepartemen.php';
require_once '../app/models/ModelKaryawan.php';

class Departemen {
    private $DepartemenModel;
    private $KaryawanModel;

    public function __construct() {
        $this->DepartemenModel = new DepartemenModels();
        $this->KaryawanModel = new DataKaryawanModels();
    }

    public function index() {
        $DataDepartemen = $this->DepartemenModel->tampilDepartemen();
        require_once '../app/views/departemen/index.php';

    }

    public function create() {
        require_once '../app/views/departemen/create.php';
    }

    public function store() {
        $this->DepartemenModel->tambahDepartemen();
        $_SESSION['flash_message'] = [
            'pesan' => 'Data Departemen Berhasil Ditambahkan',
            'type' => 'success'
        ];
        header('location: index');
    }

    public function edit($id_departemen) {  

        $DataDepartemen = $this->DepartemenModel->getDepartemenById($id_departemen);
        require_once '../app/views/departemen/edit.php';
    }

    public function update() {
        $this->DepartemenModel->updateDepartemen();
        $_SESSION['flash_message'] = [
            'pesan' => 'Data Departemen Berhasil Diubah',
            'type' => 'success'
        ];
        header('location: /departemen/index');
    }

    // public function delete($id_departemen){
    //     $this->DepartemenModel->deleteDepartemen($id_departemen);
    //     header('location: /departemen/index');
    // }

    public function delete($id_departemen){
        $DataDepartemen = $this->KaryawanModel->DepartemenUse($id_departemen);
        if ($DataDepartemen) {
            $_SESSION['flash_message'] = [
                'pesan' => 'Data Departemen Tidak Bisa Dihapus karena Masih digunakan di Tabel Karyawan',
                'type' => 'danger'
            ];
            header('location: /departemen/index');
            exit();
        }else {
            $this->DepartemenModel->deleteDepartemen($id_departemen);
            $_SESSION['flash_message'] = [
                'pesan' => 'Data Departemen berhasil dihapus',
                'type' => 'success'
            ];
            header('location: /departemen/index');
            exit();
        }
        
    }
}
