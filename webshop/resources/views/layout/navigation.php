<nav>
    <ul>
        <?php foreach($router->routes as $route => $controller): ?>
        <li>
            <a href="/<?= $route ?>"><?= ucwords($route) ?></a>
        </li>    
        <?php endforeach ?>
    </ul>
</nav>