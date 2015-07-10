<?php

namespace KL\CalendarBundle\Entity;

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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="Subject", inversedBy="course")
     * @ORM\JoinColumn(name="subject_id", referencedColumnName="id")
     */
    protected $subject;

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
     * Set subject
     *
     * @param  $courseType
     * @return Course
     */
    public function setCourseType($courseType = null)
    {
        $this->subject = $courseType;

        return $this;
    }

    /**
     * Get subject
     *
     * @return  
     */
    public function getCourseType()
    {
        return $this->subject;
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

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Set subject
     *
     * @param \KL\CalendarBundle\Entity\Subject $subject
     * @return Course
     */
    public function setSubject(\KL\CalendarBundle\Entity\Subject $subject = null)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return \KL\CalendarBundle\Entity\Subject 
     */
    public function getSubject()
    {
        return $this->subject;
    }
}
