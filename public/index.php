<?php
define('ROOT', dirname(__DIR__) . '/');
require '../app/App.php';
App::load();
$app = App::getInstance();

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}

if ($page === 'home') {
    $controller = new \App\Controllers\HomeController();
    $controller->index();
} else {
    $controller = new \App\Controllers\WidgetsController();
    if ($page === 'documents' || $page === 'document') {
        $controller->documents();
    } else if ($page === 'contact-email') {
        $controller->sendContactEmail();
    } else {
        $controller->notFound();
    }
}

?>