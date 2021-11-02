<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__.'/vendor/autoload.php';


$router = new App\Http\Router;

$router->define('category', '\App\Controllers\Category');

try{
	$uri = trim($_SERVER['REQUEST_URI'] ?? '', '/');
	if(str_starts_with($uri,'resources/js') || str_starts_with($uri,'resources/css')){
	   return @file_get_contents(__DIR__.$uri);
	}
    echo $router->direct($uri);
}catch(\Exception $e){
       // Fallback incase it doesn't pan out
       require 'resources/views/404.php';
}
die;
