<?php
define('ROOT', dirname(__DIR__) . '/');
require '../app/App.php';
App::load();
$app = App::getInstance();

if ( empty($_GET) ) {
    $page = 'home';
} else {
    if ($_GET['page'] === 'documents' || $_GET['page'] === 'document') {
        $page = 'documents';
    } else {
        $page = '';
    }
}

$controller = new \App\Controllers\HomeController();
if ($page === 'home') {
    $controller = new \App\Controllers\HomeController();
    $controller->index();
} else if ($page === 'documents') {
    $controller = new \App\Controllers\StaticPagesController();
    $controller->documents();
} else {
    $controller = new \App\Controllers\HomeController();
    $controller->notFound();
}

?>