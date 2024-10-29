<?php
// routes.php

require_once 'app/controllers/ControllerDataPelatihan.php';
require_once 'app/controllers/ControllerDepartemen.php';

$controller = new DataPelatihan();
$controller2 = new Departemen();

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
