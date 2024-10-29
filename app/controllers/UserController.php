<?php
// app/controllers/UserController.php
require_once '../app/models/User.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function index() {
        $users = $this->userModel->getAllUsers();
        require_once '../app/views/data_pelatihan/index.php';

    }

    public function create() {

        
        // $data = [
        //     'id_pelatihan' => $_POST['id_pelatihan'],
        //     'nama' => $_POST['nama'],
        //     'keterangan' => $_POST['keterangan']
        // ];

	    // if($this->userModel->insertDataPelatihan($data)) {
        //     header('location:/data_pelatihan/index.php');
        // }
        require_once '../app/views/data_pelatihan/create.php';
    }

    public function updateDataPelatihan() {
        $id_pelatihan = $_POST['id_pelatihan'];
        $nama = $_POST['nama'];
        $keterangan = $_POST['keterangan'];
        $this->userModel->InsertDataPelatihan( $id_pelatihan, $nama, $keterangan);
        header('Location: /data_pelatihan/index');
    }
}
