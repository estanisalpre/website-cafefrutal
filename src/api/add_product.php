<?php
require_once __DIR__ . '/../../src/config/database.php';

$input = json_decode(file_get_contents("php://input"), true);
$productName = $input['prodName'];
$price = $input['price'];

$query = 'INSERT INTO products (productName, productValue, available) VALUES (?, ?, 1)';
$stmt = $pdo->prepare($query);
$stmt->execute([$productName, $price]);

echo "Producto agregado exitosamente";
?>