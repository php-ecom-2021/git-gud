<?php
	require 'app/Model/Category.php';
	$category = new Category('Car');
	$category->initialize();
	$products = $category->fetchProducts();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $category->name ?></title>

    <?php include('resources/views/layout/head.php'); ?>
</head>
<body>
    <?php include('resources/views/layout/navigation.php'); ?>

    <h1><?= $category->name ?> Category</h1>

    <div class="products">
    	<?php foreach($products as $product): ?>
    		<form class="product"> 
                <div class="product__name">
                    <?= $product->name ?> 
                </div>
                <div class="product__image">
                    <img src="<?= $product->image ?>">
                </div>
                <div class="product__price">
                    <?= $product->price ?> ,- 
                </div>
                <div class="product__action">
                    <button type="submit">Add to Cart</button>
                </div>
            </form>
    	<?php endforeach; ?>
    </div>


    <?php include('resources/views/layout/footer.php'); ?>
</body>
</html>