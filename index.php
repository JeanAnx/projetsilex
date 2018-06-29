<?php 

include 'vendor/autoload.php';

/******* INDEX *****/

$app = new Silex\Application();

$app['debug'] = true;

/* MOTEUR DE RENDU TWIG */

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));


/* APPEL ASSET */

$app->register(new Silex\Provider\AssetServiceProvider());


/** HOME **/

$app->get('/','MonProjet\Controller\HomeController::main');



/******* HELLO *****/

$app->get('/hello/{name}', function ($name) use ($app) {
    return 'Hello ' . $app->escape($name);
});

/******** FLICKER***/

$app->get('/flickr',function(){

	return "<h2>flicker</h2>";
});

/******** CUSTOMERS ******/

$app->get('/customers','MonProjet\Controller\CustomersController::main')
->bind('customers');


$app->run();
