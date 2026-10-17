<?php
session_start();

require '../config/database.php';
require '../app/models/Buku.php';
require '../app/controllers/BukuController.php';

try {
    $db = (new Database())->connect();
} catch (PDOException $e) {
    http_response_code(500);
    exit('Koneksi database gagal. Periksa config/database.php.');
}

$model = new Buku($db);
$controller = new BukuController($model);

$page   = $_GET['page'] ?? 'buku';
$action = $_GET['action'] ?? 'index';

if ($page !== 'buku') {
    http_response_code(404);
    exit('Halaman tidak ditemukan.');
}


if (in_array($action, ['store', 'update', 'delete'], true)
    && $_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Metode tidak diizinkan.');
}

match ($action) {
    'index'  => $controller->index(),
    'create' => $controller->create(),
    'store'  => $controller->store(),
    default  => (function () {
        http_response_code(404);
        exit('Action tidak ditemukan.');
    })()
};