<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function() use($app) {
    $x = 1;
    return "Hello World 4";
});

$app->run();
