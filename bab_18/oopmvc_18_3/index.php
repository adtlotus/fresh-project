<?php 

$request = preg_replace("|/*(.+?)/*$|", "\\1", $_SERVER['PATH_INFO']);
$uri = explode('/', $request);

$uri0 = isset($uri[0]);
$uri1 = isset($uri[1]);
$id = isset($_GET['id']);

// Routing dan menjalankan method yang sesuai dengan URL
if ($uri0 == 'anggota' && $uri1 == 'detail' && $id) {
    require_once "controller/Anggota.php";
    require_once "model/AnggotaModel.php";    
    $model = new AnggotaModel();
    $controller = new Anggota($model);
    $id = $_GET['id'];
    $controller->detail($id);
} elseif ($uri0 == 'anggota' && $uri1) {
    require_once "controller/Anggota.php";
    require_once "model/AnggotaModel.php";    
    $model = new AnggotaModel();
    $controller = new Anggota($model);
    $controller->index();
} else {
    header('HTTP/1.1 404 Not Found');
    echo '<html><body><h1>404 Bro!</h1></body></html>';
}