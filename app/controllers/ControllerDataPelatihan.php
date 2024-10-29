<?php
// app/controllers/UserController.php
require_once '../app/models/ModelDataPelatihan.php';

class DataPelatihan {
    private $DataModel;

    public function __construct() {
        $this->DataModel = new DataPelatihanModels();
    }

    public function index() {
        $DataPelatihan = $this->DataModel->tampilDataPelatihan();
        require_once '../app/views/data_pelatihan/index.php';

    }

/*************  ✨ Codeium Command ⭐  *************/
    /**
     * Loads the view for creating a new data pelatihan entry.
     */
/******  ad063929-b4cd-497f-ba15-f6ae10138647  *******/
    public function create() {
        require_once '../app/views/data_pelatihan/create.php';
    }

    public function store() {
        $this->DataModel->tambahDataPelatihan();
        header('location: index');
    }

    public function edit($id_pelatihan) {  

        $DataPelatihan = $this->DataModel->getDataPelatihanById($id_pelatihan);
        require_once '../app/views/data_pelatihan/edit.php';
    }

    public function update() {
        $this->DataModel->updateDataPelatihan();
        header('location: /data_pelatihan');
    }
}
