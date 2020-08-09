<?php
/**
 * https://www.youtube.com/watch?v=GTESlsYTUns @46:25
 */
require_once __DIR__ . '/../vendor/autoload.php';

use app\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', function() {
    return 'Hello World';
});
$app->router->get('/', 'home');
$app->router->get('/contact', 'contact');
$app->router->post('/contact', function(){
    return 'handling submitted data';
});
$app->run();