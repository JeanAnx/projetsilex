<?php 

namespace MonProjet\Controller;

use Silex\Application;

class HomeController {

	public function main(Application $app) {

		$app['url_generator']->generate('customers');

		return $app['twig']->render('home.twig', array('name' => 'Johnny Boy', 'fruits' => [
			['name' => 'banane','color' => 'jaune'],
			['name' => 'fraise','color' => 'rouge'],
			['name' => 'abricot','color' => 'orange']
			])
		);


	}

}