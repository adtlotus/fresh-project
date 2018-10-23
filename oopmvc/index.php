<?php // index.php

// Memanggil controller dan model
require_once 'model/anggota_model.php';
require_once 'controller/anggota.php';

// Routing
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

echo $uri;
if ('/TrainingAsslab/oopmvc/index.php' === $uri) {
    index();
} elseif ('/TrainingAsslab/oopmvc/index.php/detail' === $uri && isset($_GET['id'])) {
    detail($_GET['id']);
} else {
    header('HTTP/1.1 404 Not Found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';
}