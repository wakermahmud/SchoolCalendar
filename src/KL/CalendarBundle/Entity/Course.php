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
class Course
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
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="duration", type="time")
     */
    private $duration;

    /**
     * @ORM\ManyToOne(targetEntity="Course_Type", inversedBy="course")
     * @ORM\JoinColumn(name="course_type_id", referencedColumnName="id")
     */
    protected $course_type;

    /**
     * @ORM\ManyToOne(targetEntity="Professor", inversedBy="course")
     * @ORM\JoinColumn(name="professor_id", referencedColumnName="id")
     */
    protected $professor;

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
     * Set description
     *
     * @param string $description
     * @return Course
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set duration
     *
     * @param \DateTime $duration
     * @return Course
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return \DateTime 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set course_type
     *
     * @param  $courseType
     * @return Course
     */
    public function setCourseType($courseType = null)
    {
        $this->course_type = $courseType;

        return $this;
    }

    /**
     * Get course_type
     *
     * @return  
     */
    public function getCourseType()
    {
        return $this->course_type;
    }

    /**
     * Set professor
     *
     * @param $professor
     * @return Course
     */
    public function setProfessor($professor = null)
    {
        $this->professor = $professor;

        return $this;
    }

    /**
     * Get professor
     *
     * @return Professor
     */
    public function getProfessor()
    {
        return $this->professor;
    }
}
