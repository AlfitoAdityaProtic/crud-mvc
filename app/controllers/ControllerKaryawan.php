<?php
// app/controllers/UserController.php
require_once '../app/models/ModelKaryawan.php';
require_once '../app/models/ModelDepartemen.php';

class DataKaryawan {
    private $KaryawanModel;
    private $DepartemenModel;

    public function __construct() {
        $this->KaryawanModel = new DataKaryawanModels();
        $this->DepartemenModel = new DepartemenModels();
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
        header('location: index');
    }

    public function edit($id_karyawan) { 
        $DataDepartemen = $this->DepartemenModel->tampilDepartemen();
        $DataKaryawan = $this->KaryawanModel->getKaryawanById($id_karyawan);
        require_once '../app/views/karyawan/edit.php';
    }

    public function update() {
        $this->KaryawanModel->updateKaryawan();
        header('location: /karyawan/index');
    }

    public function delete($id_karyawan){
        $this->KaryawanModel->deleteKaryawan($id_karyawan);
        header('location: /karyawan/index');
    }
}
