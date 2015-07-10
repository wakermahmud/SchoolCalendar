<?php

namespace KL\CalendarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CalendarController extends Controller {

    /**
     * @Route("/calendar)
     */
    public function indexAction($name) {
    }

    /**
     * @Route("/calendar/create-teacher)
     */
    public function createTeacherAction($name) {
    }

    /**
     * @Route("/calendar/create-course)
     */
    public function createCourseAction($name) {
    }
}