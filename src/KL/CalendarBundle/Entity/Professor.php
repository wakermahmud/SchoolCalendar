<?php

namespace KL\CalendarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use KL\CalendarBundle\Entity\Person as Person;

/**
 * Person
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Professor  extends  Person
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
     * @var float
     *
     * @ORM\Column(name="price_hours", type="decimal", scale=2)
     */
    private $price_hours;

    /**
     * @ORM\OneToMany(targetEntity="Course", mappedBy="$professor")
     */
    protected $course;

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
     * Set courses_type
     *
     * @param float $price_hours
     * @return Professor
     */
    public function setPriceHours($price_hours)
    {
        $this->price_hours = $price_hours;

        return $this;
    }

    /**
     * Get courses_type
     *
     * @return float
     */
    public function getPriceHours()
    {
        return $this->$price_hours;
    }

    /**
     * Set course
     *
     * @param  $course
     * @return Professor
     */
    public function setCourse($course = null)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return  
     */
    public function getCourse()
    {
        return $this->course;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->course = new ArrayCollection();
    }

    /**
     * Add course
     *
     * @param $course
     * @return Professor
     */
    public function addCourse($course)
    {
        $this->course[] = $course;

        return $this;
    }

    /**
     * Remove course
     *
     * @param $course
     */
    public function removeCourse($course)
    {
        $this->course->removeElement($course);
    }
}
