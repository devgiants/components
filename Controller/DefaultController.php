<?php

namespace Devgiants\ComponentsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DevgiantsComponentsBundle:Default:index.html.twig');
    }
}
