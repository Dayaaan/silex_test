<?php 

namespace MonProjet\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use MonProjet\Service\FlickrService;


class FlickrController {

	public function main(Application $app, Request $request) {

		$photos = $request->query->get('tagList');

		$flickrService = new FlickrService();

		$photos = $flickrService->searchPhotos($photos);

	



		return $app['twig']->render('flickr.twig', array('photos' => $photos));
	}
}