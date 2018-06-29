<?php 

namespace MonProjet\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class FlickrController {

    public function main(Application $app,Request $request){






        return $app['twig']->render('flickr.twig');



    }

}