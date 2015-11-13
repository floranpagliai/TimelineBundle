<?php

namespace Shked0wn\TimelineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TimelineBundle:Default:index.html.twig', array('name' => $name));
    }
}
