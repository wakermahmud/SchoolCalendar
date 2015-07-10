<?php

    namespace KL\CalendarBundle\Controller;

    use KL\CalendarBundle\Entity\Course;
    use KL\CalendarBundle\Form\CourseType;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

    class CalendarController extends Controller {

        public function createCourseAction() {
            $course = new Course();
            $form = $this->createForm(new CourseType, $course);

            return $this->render('KLCalendarBundle::create-course.html.twig', array('form' => $form->createView()));
        }
    }