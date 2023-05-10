<?php
/** User: EvgCodegolic ...*/

require_once __DIR__ . '/vendor/autoload.php';

use app\core\Application;


$app = new Application();

$app->router->get('/', function () {
    echo "hey bro!";
});

$app->router->get('/contact', function () {
    echo "contact";
});

$app->run();
