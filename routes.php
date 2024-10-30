<?php
// routes.php

require_once 'app/controllers/ControllerDataPelatihan.php';
require_once 'app/controllers/ControllerDepartemen.php';
require_once 'app/controllers/ControllerHome.php';
require_once 'app/controllers/ControllerDashboard.php';
require_once 'app/controllers/ControllerPelatihanKaryawan.php';
require_once 'app/controllers/ControllerKaryawan.php';
require_once 'app/controllers/ControllerAbsensi.php';

$controller = new DataPelatihan();
$controller1 = new Home();
$controller2 = new Departemen();
$controller3 = new Dashboard();
$controller4 = new PelatihanKaryawan();
$controller5 = new DataKaryawan();
$controller6 = new DataAbsensi();

$url = $_SERVER['REQUEST_URI'];
if($url == '/home/index' || $url == '/'){
    $controller1->index();
}
else if ($url == '/dashboard/index') { //data pelatihan start
    $controller3->index();
}else if ($url == '/data_pelatihan/index') { //data pelatihan start
    $controller->index();
}elseif ($url == '/data_pelatihan/create') {
    $controller->create();
} elseif ($url == '/data_pelatihan/store') {
    $controller->store();
} elseif (preg_match('/\/data_pelatihan\/edit\/(\d+)/', $url, $matches)) {
    $id_pelatihan = $matches[1];
    $controller->edit($id_pelatihan);
}elseif ($url == '/data_pelatihan/update') {
    $controller->update();
} elseif (preg_match('/\/data_pelatihan\/delete\/(\d+)/', $url, $matches)) {
    $id_pelatihan = $matches[1];
    $controller->delete($id_pelatihan); // data pelatihan end
}

elseif ($url == '/departemen/index') { // departemen start
    $controller2->index();
}elseif ($url == '/departemen/create') {
    $controller2->create();
} elseif ($url == '/departemen/store') {
    $controller2->store();
} elseif (preg_match('/\/departemen\/edit\/(\d+)/', $url, $matches)) {
    $id_departemen = $matches[1];
    $controller2->edit($id_departemen);
}elseif ($url == '/departemen/update') {
    $controller2->update();
} elseif (preg_match('/\/departemen\/delete\/(\d+)/', $url, $matches)) {
    $id_departemen = $matches[1];
    $controller2->delete($id_departemen); // departemen end
}

elseif ($url == '/pelatihan_karyawan/index') { 
    // Menampilkan daftar pelatihan karyawan
    $controller4->index();
} elseif ($url == '/pelatihan_karyawan/create') {
    // Menampilkan form untuk menambahkan pelatihan karyawan
    $controller4->create();
} elseif ($url == '/pelatihan_karyawan/store') {
    // Menyimpan data pelatihan karyawan baru
    $controller4->store();
} elseif (preg_match('/\/pelatihan_karyawan\/edit\/(\d+)/', $url, $matches)) {
    // Mengambil ID pelatihan karyawan untuk mengedit
    $id_pelatihanKaryawan = $matches[1];
    $controller4->edit($id_pelatihanKaryawan);
} elseif ($url == '/pelatihan_karyawan/update') {
    // Memperbarui data pelatihan karyawan
    $controller4->update();
} elseif (preg_match('/\/pelatihan_karyawan\/delete\/(\d+)/', $url, $matches)) {
    // Mengambil ID pelatihan karyawan untuk dihapus
    $id_pelatihanKaryawan = $matches[1];
    $controller4->delete($id_pelatihanKaryawan);
}

elseif ($url == '/karyawan/index') { 
    // Menampilkan daftar karyawan
    $controller5->index();
} elseif ($url == '/karyawan/create') {
    // Menampilkan form untuk menambahkan karyawan
    $controller5->create();
} elseif ($url == '/karyawan/store') {
    // Menyimpan data karyawan baru
    $controller5->store();
} elseif (preg_match('/\/karyawan\/edit\/(\d+)/', $url, $matches)) {
    // Mengambil ID karyawan untuk mengedit
    $id_karyawan = $matches[1];
    $controller5->edit($id_karyawan);
} elseif ($url == '/karyawan/update') {
    // Memperbarui data karyawan
    $controller5->update();
} elseif (preg_match('/\/karyawan\/delete\/(\d+)/', $url, $matches)) {
    // Mengambil ID karyawan untuk dihapus
    $id_karyawan = $matches[1];
    $controller5->delete($id_karyawan);
}

elseif ($url == '/absensi/index') { // absensi start
    $controller6->index();
}elseif ($url == '/absensi/create') {
    $controller6->create();
} elseif ($url == '/absensi/store') {
    $controller6->store();
} elseif (preg_match('/\/absensi\/edit\/(\d+)/', $url, $matches)) {
    $id_absensi = $matches[1];
    $controller6->edit($id_absensi);
}elseif ($url == '/absensi/update') {
    $controller6->update();
} elseif (preg_match('/\/absensi\/delete\/(\d+)/', $url, $matches)) {
    $id_absensi = $matches[1];
    $controller6->delete($id_absensi); // absensi end
}