<?php
// routes.php

require_once 'app/controllers/ControllerDataPelatihan.php';

$controller = new DataPelatihan();

$url = $_SERVER['REQUEST_URI'];

if ($url == '/data_pelatihan/index' || $url == '/') {
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
    $controller->delete($id_pelatihan);
}

// $controller2 = new Departemen();

// $url2 = $_SERVER['REQUEST_URI'];q

// if ($url2 == '/departemen/index' || $url2 == '/') {
//     $controller2->index();
// }elseif ($url2 == '/departemen/create') {
//     $controller2->create();
// } elseif ($url2 == '/departemen/store') {
//     $controller2->store();
// } elseif ($url2 == '/departemen/edit/:id') {
//     $controller2->edit($_GET['id']);
// } elseif ($url2 == '/departemen/update') {
//     $controller2->update();
// }