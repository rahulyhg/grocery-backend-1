<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * For storing metadata for PPP surveys
 * @ORM\Entity()
 * @ORM\Table(name="surveys_ppp_metadata")
 */
class SurveyPppMetadata {
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var Survey
     * @ORM\ManyToOne(targetEntity="Survey", inversedBy="surveys_ppp_metadata")
     * @ORM\JoinColumn(name="survey_id", referencedColumnName="id")
     */
    protected $survey;

    /**
     * @var integer
     * @ORM\Column(type="integer", length=1, nullable=false, options={"default" = 0, "unsigned": true})
     */
    protected $nps1_visible = 0;

    /**
     * @var integer
     * @ORM\Column(type="integer", length=1, nullable=false, options={"default" = 0, "unsigned": true})
     */
    protected $nps1_locked = 0;

    /**
     * @var integer
     * @ORM\Column(type="integer", length=1, nullable=false, options={"default" = 0, "unsigned": true})
     */
    protected $nps2_visible = 0;

    /**
     * @var integer
     * @ORM\Column(type="integer", length=1, nullable=false, options={"default" = 0, "unsigned": true})
     */
    protected $nps2_locked = 0;

    /**
     * @var integer
     * @ORM\Column(type="integer", length=1, nullable=false, options={"default" = 0, "unsigned": true})
     */
    protected $grade1_visible = 0;

    /**
     * @var integer
     * @ORM\Column(type="integer", length=1, nullable=false, options={"default" = 0, "unsigned": true})
     */
    protected $grade1_locked = 0;

    /**
     * @var integer
     * @ORM\Column(type="integer", length=1, nullable=false, options={"default" = 0, "unsigned": true})
     */
    protected $grade2_visible = 0;

    /**
     * @var integer
     * @ORM\Column(type="integer", length=1, nullable=false, options={"default" = 0, "unsigned": true})
     */
    protected $grade2_locked = 0;


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return Survey
     */
    public function getSurvey(): Survey
    {
        return $this->survey;
    }

    /**
     * @param Survey $survey
     */
    public function setSurvey(Survey $survey): void
    {
        $this->survey = $survey;
    }

    /**
     * @return integer
     */
    public function getNps1Visible(): integer
    {
        return $this->nps1_visible;
    }

    /**
     * @param integer $nps1_visible
     */
    public function setNps1Visible(integer $nps1_visible): void
    {
        $this->nps1_visible = $nps1_visible;
    }

    /**
     * @return integer
     */
    public function getNps1Locked(): integer
    {
        return $this->nps1_locked;
    }

    /**
     * @param integer $nps1_locked
     */
    public function setNps1Locked(integer $nps1_locked): void
    {
        $this->nps1_locked = $nps1_locked;
    }

    /**
     * @return integer
     */
    public function getNps2Visible(): integer
    {
        return $this->nps2_visible;
    }

    /**
     * @param integer $nps2_visible
     */
    public function setNps2Visible(integer $nps2_visible): void
    {
        $this->nps2_visible = $nps2_visible;
    }

    /**
     * @return integer
     */
    public function getNps2Locked(): integer
    {
        return $this->nps2_locked;
    }

    /**
     * @param integer $nps2_locked
     */
    public function setNps2Locked(integer $nps2_locked): void
    {
        $this->nps2_locked = $nps2_locked;
    }

    /**
     * @return integer
     */
    public function getGrade1Visible(): integer
    {
        return $this->grade1_visible;
    }

    /**
     * @param integer $grade1_visible
     */
    public function setGrade1Visible(integer $grade1_visible): void
    {
        $this->grade1_visible = $grade1_visible;
    }

    /**
     * @return integer
     */
    public function getGrade1Locked(): integer
    {
        return $this->grade1_locked;
    }

    /**
     * @param integer $grade1_locked
     */
    public function setGrade1Locked(integer $grade1_locked): void
    {
        $this->grade1_locked = $grade1_locked;
    }

    /**
     * @return integer
     */
    public function getGrade2Visible(): integer
    {
        return $this->grade2_visible;
    }

    /**
     * @param integer $grade2_visible
     */
    public function setGrade2Visible(integer $grade2_visible): void
    {
        $this->grade2_visible = $grade2_visible;
    }

    /**
     * @return integer
     */
    public function getGrade2Locked(): integer
    {
        return $this->grade2_locked;
    }

    /**
     * @param integer $grade2_locked
     */
    public function setGrade2Locked(integer $grade2_locked): void
    {
        $this->grade2_locked = $grade2_locked;
    }

}