<?php

$app = new Application();

$app->router->get('/', function () {
    echo "hey bro!";
});

$app->run();