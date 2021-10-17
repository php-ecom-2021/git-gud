<?php

require('app/Http/Router.php');

$router = new Router;

$router->define('git-gud/webshop','app/Controllers/Home.php');

$uri = trim($_SERVER['REQUEST_URI'], '/');

require $router->direct($uri); 
