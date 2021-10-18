<?php 

class Product {
	public $name = '';
	public $price = 0;
	public $image = '';

	public function __construct($name, $price = 0, $image = 'https://picsum.photos/200'){
		$this->name = $name;
		$this->price = $price;
		$this->image = $image;
	}
}