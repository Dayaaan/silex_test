<?php 


namespace MonProjet\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use MonProjet\Service\DatabaseService;



class CustomerController {

	public function main(Application $app, Request $request) {
		$country = [];

		$country = $request->query->get('country');



		$db = new DatabaseService();

		$customers = $db->getCustomersByCountry($country);




		return $app['twig']->render('customer.twig', array("customers" => $customers));
	}
}


