<?php

namespace KL\CalendarBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Course
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Course_Type
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Course", mappedBy="$course_type")
     */
    protected $course;

    public function __construct()
    {
        $this->$course = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Course
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add course
     *
     * @param  $course
     * @return Course_Type
     */
    public function addCourse($course)
    {
        $this->course[] = $course;

        return $this;
    }

    /**
     * Remove course
     *
     * @param  $course
     */
    public function removeCourse($course)
    {
        $this->course->removeElement($course);
    }

    /**
     * Get course
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCourse()
    {
        return $this->course;
    }
}
