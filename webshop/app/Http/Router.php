
<?php namespace App\Http;

class Router{
    public $routes = [];

    public static function describe(){
        return $this->routes;
    }

    public function define(string $route, string $controller)
    {
        // Acces this class's Property called Routes
        // The Array Key should be the current $route
        // The value, where we want to direct the request
        $this->routes[$route] = $controller;

    }

    public function direct($uri)
    {
        // Check for a route in the $routes property
        if(array_key_exists($uri, $this->routes))
        {   
            // If a route exists we want to return the controller
            return $this->routes[$uri];
        }
        /* 
         * No routes have been found, throw an exception
         * This is a good way to show developers something
         * unexpected happened 
         */ 
        throw new \Exception('No Routes named '.$uri.' defined');
    }
}