<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('@FOSUser/Profile/show.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }


    public function profilcAction()
    {
        return $this->render('AppBundle::profilc.html.twig');

    }

    public function geolocAction()
    {

        return $this->render('::geolocalisation.html.twig');

    }

    public function defisAction()
    {
        return $this->render('AppBundle::defis.html.twig');

    }

    public function badgesAction()
    {
        return $this->render('AppBundle::badges.html.twig');

    }
}