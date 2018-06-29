<?php 

namespace MonProjet\Controller;

use Silex\Application;
use MonProjet\Model\Database;
use Symfony\Component\HttpFoundation\Request;

class CustomersController {

	public function main(Application $app, Request $request) {

		$country = $request->query->get('country');

		$database  = new Database;
		$customersListByCountry = $database->getCustomersByCountry($country);

		return $app['twig']->render('customers.twig', array ('customers' => $customersListByCountry));

		

	}

}