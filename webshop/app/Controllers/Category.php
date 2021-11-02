<?php namespace App\Controllers;

class Category extends Controller{
    public $template = 'category.html';
    public function initialize()
    {
        $category = new \App\Model\Category('Car');
        $category->initialize();
        $this->data['title'] = 'Car';
        $this->data['products'] = $category->fetchProducts();
    }
}