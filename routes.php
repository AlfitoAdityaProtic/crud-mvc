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
} elseif ($url == '/data_pelatihan/edit' && isset($_GET['id'])) {
    $controller->edit($_GET['id']);
} elseif ($url == '/data_pelatihan/delete' && isset($_GET['id'])) {
    $controller->delete($_GET['id']);
}

// $controller2 = new Departemen();

// $url2 = $_SERVER['REQUEST_URI'];

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