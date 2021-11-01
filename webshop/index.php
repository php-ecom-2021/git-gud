<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__.'/vendor/autoload.php';

$router = new App\Http\Router;

/*
 * Define Routes for our Application 
 */

$router->define('', 'app/Controllers/Home.php');
$router->define('category', 'app/Controllers/Category.php');
$router->define('product', 'app/Controllers/Home.php');

// Fetch the current URI, be mindful of localhost
$uri = trim($_SERVER['REQUEST_URI'] ?? '', '/');
$uri = str_replace('/projects/git-gud', '', $uri);

//handle static assets like css and js
if(str_starts_with($uri,'resources/js') || str_starts_with($uri,'resources/css')){
	return @file_get_contents(__DIR__.$uri);
}

try{
	// Run our Router
	require $router->direct($uri); 
}catch(\Exception $e){
	// Fallback incase it doesn't pan out
	require 'resources/views/404.php';
}
