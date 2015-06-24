<?php

namespace KL\CalendarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KLCalendarBundle:Default:index.html.twig', array('name' => $name));
    }
}
