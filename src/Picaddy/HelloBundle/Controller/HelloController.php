<?php

/* Configuration */
namespace Picaddy\HelloBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
     /**
     * @extra:Route("/demo", name="_demo")
     * @extra:Template()
     */
    public function indexAction()
    {
        //On va afficher le fichier d'index
        return $this->render('PicaddyHelloBundle:Default:index.html.twig');
    }
}

?>
