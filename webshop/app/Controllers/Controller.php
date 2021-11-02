<?php namespace App\Controllers;

abstract class Controller {
    public $template = 'index.html';
    public $data = [];

    public function render(){
        $this->initialize();
        try{
	        $loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/../../resources/views');
	        $twig = new \Twig\Environment($loader);
	        
            $template = $twig->load($this->template);
            return $template->render($this->data);
        }catch(\Throwable $t){
            dump($t->getMessage());
        }
    }

    public function initialize(){}
}
