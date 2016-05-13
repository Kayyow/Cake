<?php
define('ROOT', dirname(__DIR__) . '/');
require '../app/App.php';
App::load();
$app = App::getInstance();

if ( empty($_GET) ) {
    $page = 'home';
} else {
    $page = '';
}

$controller = new \App\Controllers\HomeController();
if ($page === 'home') {
    $controller->index();
} else {
    $controller->notFound();
}
?>