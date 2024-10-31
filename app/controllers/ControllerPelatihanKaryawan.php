<?php

require_once '../app/models/ModelPelatihanKaryawan.php';
require_once '../app/models/ModelKaryawan.php';
require_once '../app/models/ModelDataPelatihan.php';
// Perbaiki path jika perlu

class PelatihanKaryawan {
    private $model;
    private $DataKaryawanModels;
    private $DataPelatihanModels;

    // Constructor untuk menginisialisasi objek PelatihanKaryawanModels
    public function __construct() {
        $this->model = new PelatihanKaryawanModels();
        $this->DataKaryawanModels = new DataKaryawanModels();
        $this->DataPelatihanModels = new DataPelatihanModels(); // Gunakan model yang benar
    }

    // Menampilkan semua data pelatihan karyawan
    public function index() {
        $data_pelatihan = $this->model->tampil_data(); // Ambil data dari model
        require_once "../app/views/pelatihan_karyawan/index.php"; // Pastikan view ini ada
    }

    // Menampilkan formulir untuk menambahkan data pelatihan karyawan
    public function create() {
        $data_karyawan = $this->DataKaryawanModels->tampilDataKaryawan();
        $data_pelatihan = $this->DataPelatihanModels->tampilDataPelatihan();
        require_once '../app/views/pelatihan_karyawan/create.php'; // Pastikan file ini ada
    }

    // Menyimpan data pelatihan karyawan
    public function store() {
        // Ambil data dari input
        $id_pelatihanKaryawan = $_POST['id_pelatihanKaryawan'];
        $id_karyawan = $_POST['id_karyawan'];
        $id_pelatihan = $_POST['id_pelatihan'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];
        $check = $this->model->tambah_data($id_pelatihanKaryawan, $id_karyawan, $id_pelatihan, $tanggal, $keterangan); // Panggil metode dengan parameter lengkap
        session_start();
        if ($check == 1) {
            $_SESSION['message'] = 'Data departemen berhasil ditambahkan.'; // Simpan pesan sukses di session
        } else {
            $_SESSION['message'] = 'Data departemen gagal ditambahkan.'; // Simpan pesan gagal di session
        }
      
        header('Location: /pelatihan_karyawan/index'); // Redirect setelah penyimpanan
        exit();

        // Validasi input dapat ditambahkan di sini jika perlu
        $this->model->tambah_data($id_pelatihanKaryawan, $id_karyawan, $id_pelatihan, $tanggal, $keterangan);
        header('Location: /pelatihan_karyawan/index');
    }

    // Mengedit data pelatihan karyawan berdasarkan ID
    public function edit($id_pelatihanKaryawan) {
        $pelatihan = $this->model->getDataPelatihanById($id_pelatihanKaryawan);
        $data_karyawan = $this->DataKaryawanModels->tampilDataKaryawan();
        $data_pelatihan = $this->DataPelatihanModels->tampilDataPelatihan();
        require_once '../app/views/pelatihan_karyawan/edit.php'; // Pastikan file ini ada
    }

    // Memperbarui data pelatihan karyawan
    public function update() {
        // Ambil data dari input
        $id_pelatihanKaryawan = $_POST['id_pelatihanKaryawan'];
        $id_karyawan = $_POST['id_karyawan'];
        $id_pelatihan = $_POST['id_pelatihan'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

        // Validasi input dapat ditambahkan di sini jika perlu
        $this->model->edit_data($id_pelatihanKaryawan, $id_karyawan, $id_pelatihan, $tanggal, $keterangan);
        header('Location: /pelatihan_karyawan/index');
    }

    // Menghapus data pelatihan karyawan
    public function delete($id_pelatihanKaryawan) {
        $this->model->hapus_data($id_pelatihanKaryawan);
        header('Location: /pelatihan_karyawan/index');
    }
}
?>
