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
} elseif ($url == '/data_pelatihan/edit/:id') {
    $controller->edit($_GET['id']);
} elseif ($url == '/data_pelatihan/update') {
    $controller->update();
}