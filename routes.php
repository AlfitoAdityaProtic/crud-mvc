<?php
// routes.php

require_once 'app/controllers/UserController.php';

$controller = new UserController();

$url = $_SERVER['REQUEST_URI'];

if ($url == '/data_pelatihan/index' || $url == '/') {
    $controller->index();
} elseif ($url == '/data_pelatihan/create') {
    $controller->create();
} elseif ($url == '/data_pelatihan/store') {
    $controller->updateDataPelatihan();
} else {
    echo "404 Not Found";
}
