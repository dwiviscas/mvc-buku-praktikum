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

match ($action) {
    'index'  => $controller->index(),
    default  => (function () {
        http_response_code(404);
        exit('Action tidak ditemukan.');
    })()
};