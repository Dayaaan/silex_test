<?php 
include '../vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;


$app->get('/', 'MonProjet\Controller\HomeController::main')->bind('home');

$app->get('/hello', 'MonProjet\Controller\HelloController::main')->bind("hello");

$app->get('/customer', 'MonProjet\Controller\CustomerController::main')->bind("customer");

$app->get('/bonjour', 'MonProjet\Controller\BonjourController::main')->bind("bonjour");

$app->get('/flickr', 'MonProjet\Controller\FlickrController::main')->bind("flickr");

$app->get('/bonjour/{name}', function ($name) {
    return "Hello $name! vous avez 20 ans";
});

$app->register(new Silex\Provider\AssetServiceProvider());



$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

	


$app->run();





