<?php
/**
 * Created by JetBrains PhpStorm.
 * User: shibly
 * Date: 5/28/13
 * Time: 10:48 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Blogger\BlogBundle\Controller;
use Blogger\BlogBundle\Entity\Enquiry;
use Blogger\BlogBundle\Form\EnquiryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('BloggerBlogBundle:Page:index.html.twig');
    }


    public function aboutAction()
    {
        return $this->render('BloggerBlogBundle:Page:about.html.twig');
    }

    public function contactAction()
    {
        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);
        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $form->bind($request);
            if ($form->isValid()) {
                $message = \Swift_Message::newInstance()
                    ->setSubject('Contact Enquiry from symblog')
                    ->setFrom('shibly.phy@gmail.com')
                    ->setTo($this->container->getParameter('blogger_blog.emails.contact_email'))
                    ->setBody($this->renderView('BloggerBlogBundle:Page:contactEmail.text.twig',
                        array('enquiry' => $enquiry)));
                $this->get('mailer')->send($message);
                $this->get('session')->setFlash('blogger-notice', 'Your contact enquiry was successfully sent. Thank you !');
                return $this->redirect($this->generateUrl('blogger_blog_contact'));
            }

        }
        return $this->render('BloggerBlogBundle:Page:contact.html.twig',
            array('form' => $form->createView()));
    }

}