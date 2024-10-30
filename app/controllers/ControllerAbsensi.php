<?php
// app/controllers/UserController.php
require_once '../app/models/ModelAbsensi.php';

class DataAbsensi {
    private $AbsensiModel;

    public function __construct() {
        $this->AbsensiModel = new DataAbsensiModels();
    }

    public function index() {
        $DataAbsensi = $this->AbsensiModel->tampilAbsensi();
        require_once '../app/views/absensi/index.php';

    }

    public function create() {
        require_once '../app/views/absensi/create.php';
    }

    public function store() {
        $this->AbsensiModel->tambahAbsensi();
        header('location: index');
    }

    public function edit($id_absensi) {  

        $DataAbsensi = $this->AbsensiModel->getAbsensiById($id_absensi);
        require_once '../app/views/absensi/edit.php';
    }

    public function update() {
        $this->AbsensiModel->updateAbsensi();
        header('location: /absensi/index');
    }

    public function delete($id_absensi){
        $this->AbsensiModel->deleteAbsensi($id_absensi);
        header('location: /absensi/index');
    }
}
