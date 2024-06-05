<?php
require_once (dirname(__FILE__) . "/public/utils/Router.php");

$router = new Router();

$router->addRoute('/', function () {
    require __DIR__ . '/public/pages/products.php';
});

$router->addRoute('/drinkMaster', function () {
    require __DIR__ . '/public/pages/drinkMaster.php';
});

$router->addRoute('/editProduct', function () {
    require __DIR__ . '/public/pages/editProduct.php';
});

$router->addRoute('/createProduct', function () {
    require __DIR__ . '/public/pages/createProduct.php';
});

$router->dispatch();
?>