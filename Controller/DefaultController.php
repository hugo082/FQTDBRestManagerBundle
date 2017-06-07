<?php

namespace FQT\DBRestManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FQTDBRestManagerBundle:Default:index.html.twig');
    }
}
