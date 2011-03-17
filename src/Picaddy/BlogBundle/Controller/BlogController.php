<?php

namespace Picaddy\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{

    public function indexAction()
    {
        return $this->render('PicaddyBlogBundle:Blog:index.html.twig');
        
    }
    
     public function boot()
    {
        $this->container->
            get('doctrine.orm.entity_manager')->
            getEventManager()->
            addEventSubscriber(new MysqlSessionInit('utf8', 'utf8_unicode_ci'));
    }

}


?>
