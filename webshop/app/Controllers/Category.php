<?php
	$category = new \App\Model\Category('Car');
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
    		<div class="product"> 
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
                    <form class="product__add-to-cart">
                        <button type="submit">Add to Cart</button>
                    </form>
                </div>
            </div>
    	<?php endforeach; ?>
    </div>


    <?php include('resources/views/layout/footer.php'); ?>
</body>
</html>