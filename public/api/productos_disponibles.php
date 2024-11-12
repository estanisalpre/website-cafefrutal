<?php
require_once __DIR__ . '/../../src/config/database.php';

$query = 'SELECT * FROM products WHERE available = 1';
$stmt = $pdo->query($query);
$results = $stmt->fetchAll();

header('Content-Type: application/json');
echo json_encode($results);
?>