<?php

require('app/Http/Router.php');

$router = new Router;

// Define your Routes here

$uri = trim($_SERVER['REQUEST_URI'], '/');

require $router->direct($uri); 
