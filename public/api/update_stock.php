<?php
require_once __DIR__ . '/../../src/config/database.php';

$input = json_decode(file_get_contents("php://input"), true);

if ($input) {
    foreach ($input as $key => $value) {
        $status = $value === 'on' ? 1 : 0;
        $stmt = $pdo->prepare('UPDATE products SET available = ? WHERE productName = ?');
        $stmt->execute([$status, $key]);
    }
    echo "Stock actualizado";
} else {
    echo "Datos no válidos";
}
?>