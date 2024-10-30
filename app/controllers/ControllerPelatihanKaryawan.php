<?php
// app/controllers/UserController.php
// require_once '../app/models/ModelPelatihanKaryawan.php';

// class PelatihanKaryawan {
//     private $KaryawanModel;

//     public function __construct() {
//         $this->KaryawanModel = new DataKaryawanModels();
//     }

//     public function index() {
//         $DataKaryawan = $this->KaryawanModel->tampilKaryawan();
//         require_once '../app/views/karyawan/index.php';

//     }

//     public function create() {
//         require_once '../app/views/karyawan/create.php';
//     }

//     public function store() {
//         $this->KaryawanModel->tambahKaryawan();
//         header('location: index');
//     }

//     public function edit($id_karyawan) {  

//         $DataKaryawan = $this->KaryawanModel->getKaryawanById($id_karyawan);
//         require_once '../app/views/karyawan/edit.php';
//     }

//     public function update() {
//         $this->KaryawanModel->updateKaryawan();
//         header('location: /karyawan/index');
//     }

//     public function delete($id_karyawan){
//         $this->KaryawanModel->deleteKaryawan($id_karyawan);
//         header('location: /karyawan/index');
//     }
// }
