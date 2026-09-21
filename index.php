<?php
require_once __DIR__ . '/config/Database.php';
require_once __DIR__ . '/controllers/GatoController.php';

$database = new Database();
$db = $database->getConnection();

$controller = new GatoController($db);

$action = isset($_GET['action']) ? $_GET['action'] : 'listar';

if ($action === 'listar') {
    $controller->listar();
} else {
    header('HTTP/1.1 404 Not Found');
    echo json_encode(['erro' => 'Rota não encontrada']);
}