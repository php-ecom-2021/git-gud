<?php

class Router{

    public $routes = [];

    public function define($route, $controller)
    {
        $this->routes[$route] = $controller;
    }

    public function direct($uri)
    {
        if(array_key_exists($uri, $this->routes))
        {
            return $this->routes[$uri];
        }
        throw new Exception('No Valid Route Found');
    }
}