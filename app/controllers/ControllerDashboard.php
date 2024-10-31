<?php
// Include the model at the top
require_once '../app/models/ModelDashboard.php';

class Dashboard {
    private $model;

    public function __construct() {
        // Initialize the ModelDashboard
        $this->model = new ModelDashboard();
    }

    public function index() {
        // Get totals from the model
        $totalKaryawan = $this->model->getTotalKaryawan();
        $totalDepartemen = $this->model->getTotalDepartemen();
        $totalDataPelatihan = $this->model->getTotalDataPelatihan();

        // Pass data to the view
        require_once '../app/views/dashboard/index.php';
    }
}
