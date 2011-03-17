<?php

namespace Picaddy\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController extends Controller
{
    /**
     *
     * @param  $page
     * @return <type>
     */
    public function showAction($page)
    {
        return $this->render(sprintf('PicaddyBlogBundle:Pages:%s.html.twig',$page));

    }

}


?>
