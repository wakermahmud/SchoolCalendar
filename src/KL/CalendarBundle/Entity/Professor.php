<?php

namespace KL\CalendarBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Professor
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Professor extends Person
{
    /**
     * @var float
     *
     * @ORM\Column(name="price_hours", type="decimal", scale=2, nullable=true)
     */
    private $price_hours;

    /**
     * @ORM\OneToMany(targetEntity="Course", mappedBy="$professor")
     */
    protected $course;

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
    public function setCourse($course)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     * @return ArrayCollection
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
