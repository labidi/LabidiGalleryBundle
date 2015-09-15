<?php

namespace Labidi\GalleryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LabidiGalleryBundle:Default:index.html.twig');
    }
}
