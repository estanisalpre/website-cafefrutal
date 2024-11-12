<?php
require_once __DIR__ . '/../src/config/database.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
        require __DIR__ . '/../src/views/home.php';
        break;
    case '/admin':
        require __DIR__ . '/../src/views/admin.php';
        break;
    case '/productos':
        require __DIR__ . '/../src/views/productos.php';
        break;
    case '/api/productos':
        require __DIR__ . '/api/productos.php';
        break;
    case '/api/productos/available':
        require __DIR__ . '/api/productos_disponibles.php';
        break;
    case '/api/update-stock':
        require __DIR__ . '/api/update_stock.php';
        break;
    case '/api/add-product':
        require __DIR__ . '/api/add_product.php';
        break;
    case (preg_match('/\/api\/delete-product\/(\d+)/', $uri, $matches) ? true : false):
        $_GET['id'] = $matches[1];
        require __DIR__ . '/api/delete_product.php';
        break;
    default:
        http_response_code(404);
        echo "Página no encontrada";
        break;
}
?>