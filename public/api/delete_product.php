<?php
require_once __DIR__ . '/../../src/config/database.php';

$productId = $_GET['id'];

$query = 'DELETE FROM products WHERE idProduct = ?';
$stmt = $pdo->prepare($query);
$stmt->execute([$productId]);

echo "Producto eliminado con éxito";
?>