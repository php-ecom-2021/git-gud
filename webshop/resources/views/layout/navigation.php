<nav class="crumbs">
    <ol>
    	<?php foreach($router->routes as $route => $controller): ?>
    		<li>
    			<a href="<?= $route ?>">
    				<?= ucwords($route) ?>
    			</a>
    		</li>
    	<?php endforeach; ?>
    </ol>
</nav>