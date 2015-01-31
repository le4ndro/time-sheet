<?php

namespace Imaginativo\Bundle\TSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ImaginativoTSBundle:Default:index.html.twig');
    }
}
