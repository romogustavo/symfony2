<?php

namespace Ap\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ApLoginBundle:Default:index.html.twig', array('name' => $name));
    }
}
