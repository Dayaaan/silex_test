<?php 

namespace MonProjet\Controller;

use Silex\Application;

class HelloController {

	public function main(Application $app) {
		return $app['twig']->render('hello.twig', array('name' => 'dalton', 'firstname' => "joe"));
	}
}