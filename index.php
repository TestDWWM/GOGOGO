<?php 
include './src/config/config.php'; 
require_once(CLASSES . '/Router.php');

$router = new Router();
$routes = include 'src/config/routes.php';
$page = $router->getPage();

$titre = isset($routes[$page]) ? $routes[$page] : "404";
$pageLink = CSS . "/" . $page . ".css";


include TEMPLATE . "/base.php";
?>
