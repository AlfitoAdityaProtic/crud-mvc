<?php
// routes.php

require_once 'app/controllers/ControllerDataPelatihan.php';
require_once 'app/controllers/ControllerDepartemen.php';
require_once 'app/controllers/ControllerAbsensi.php';

$controller = new DataPelatihan();
$controller2 = new Departemen();
$controller3 = new DataAbsensi();

$url = $_SERVER['REQUEST_URI'];

if ($url == '/data_pelatihan/index' || $url == '/') { //data pelatihan start
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
elseif ($url == '/absensi/index') { // absensi start
    $controller3->index();
}elseif ($url == '/absensi/create') {
    $controller3->create();
} elseif ($url == '/absensi/store') {
    $controller3->store();
} elseif (preg_match('/\/absensi\/edit\/(\d+)/', $url, $matches)) {
    $id_absensi = $matches[1];
    $controller3->edit($id_absensi);
}elseif ($url == '/absensi/update') {
    $controller3->update();
} elseif (preg_match('/\/absensi\/delete\/(\d+)/', $url, $matches)) {
    $id_absensi = $matches[1];
    $controller3->delete($id_absensi); // absensi end
}

