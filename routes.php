<?php

use CoffeeCode\Router\Router;

$router = new Router("http://www.localhost/stripe");
$router->namespace("Source\Controllers");
$router->get("/", "Pay:home");
$router->post("/", "Pay:create");
$router->dispatch();
