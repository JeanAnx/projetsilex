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

$app->get('/','MonProjet\Controller\HomeController::main')
->bind('home');
;



/******* HELLO *****/

$app->get('/hello/{name}', function ($name) use ($app) {
    return 'Hello ' . $app->escape($name);
})
->bind('hello');


/******** FLICKER***/

$app->get('/flickr','MonProjet\Controller\FlickrController::main')
->bind('flickr');
;

/******** CUSTOMERS ******/

$app->get('/customers','MonProjet\Controller\CustomersController::main')
->bind('customers');



/******** HELLO WORLD ******/

$app->get('/helloworld',function() {
	return 'HELLO WORLD';
})
->bind('helloworld');

$app->run();
