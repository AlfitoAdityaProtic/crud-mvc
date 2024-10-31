<?php
// app/controllers/UserController.php
require_once '../app/models/ModelDepartemen.php';

class Departemen {
    private $DepartemenModel;

    public function __construct() {
        $this->DepartemenModel = new DepartemenModels();
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
        header('location: index');
    }

    public function edit($id_departemen) {  

        $DataDepartemen = $this->DepartemenModel->getDepartemenById($id_departemen);
        require_once '../app/views/departemen/edit.php';
    }

    public function update() {
        $this->DepartemenModel->updateDepartemen();
        header('location: /departemen/index');
    }

    public function delete($id_departemen){
        $this->DepartemenModel->deleteDepartemen($id_departemen);
        header('location: /departemen/index');
    }
}
