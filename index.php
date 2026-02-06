<?php
require_once __DIR__ . '/app/Controller/MovelController.php';

$controller = new MovelController();

$action = $_GET['action'] ?? 'index';

if ($action === 'store') {
    $controller->store();
} else {
    $controller->index();
}
