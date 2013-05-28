<?php
/**
 * Created by JetBrains PhpStorm.
 * User: shibly
 * Date: 5/28/13
 * Time: 10:48 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Blogger\BlogBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('BloggerBlogBundle:Page:index.html.twig');
    }

}