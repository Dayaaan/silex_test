<?php 


namespace MonProjet\Controller;

use Silex\Application;

class HomeController {

	public function main(Application $app) {
		return $app['twig']->render('home.twig', array('name' => 'dalton', 'firstname' => "joe"));
	}
}