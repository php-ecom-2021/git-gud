<?php namespace App\Model;

class Category{
	public $name = '';
	public $products = [];

	public function __construct($name = ''){
		$this->name = $name;
	}

	public function initialize(){
		for ($i=0; $i < 50; $i++) {
			$product = new \App\Model\Product(
				'Product_'.time(),
				rand(1,1000)
			);
			$this->products[] = $product;
		}
	}

	public function fetchProducts(){
		return $this->products;
	}
}