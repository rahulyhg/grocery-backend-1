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
     * @ORM\GeneratedValue(stategy="AUTO")
     */
    protected $id;

    /**
     * @var Survey
     * @ORM\ManyToOne(targetEntity="Survey", inversedBy="surveys_ppp_metadata")
     * @ORM\JoinColumn(name="survey_id", referencedColumnName="id")
     */
    protected $survey;

    /**
     * @var bool
     * @ORM\Column(type="boolean", nullable=false, options={"default" = 0})
     */
    protected $nps1_visible;

    /**
     * @var bool
     * @ORM\Column(type="boolean", nullable=false, options={"default" = 0})
     */
    protected $nps1_locked;

    /**
     * @var bool
     * @ORM\Column(type="boolean", nullable=false, options={"default" = 0})
     */
    protected $nps2_visible;

    /**
     * @var bool
     * @ORM\Column(type="boolean", nullable=false, options={"default" = 0})
     */
    protected $nps2_locked;

    /**
     * @var bool
     * @ORM\Column(type="boolean", nullable=false, options={"default" = 0})
     */
    protected $grade1_visible;

    /**
     * @var bool
     * @ORM\Column(type="boolean", nullable=false, options={"default" = 0})
     */
    protected $grade1_locked;

    /**
     * @var bool
     * @ORM\Column(type="boolean", nullable=false, options={"default" = 0})
     */
    protected $grade2_visible;

    /**
     * @var bool
     * @ORM\Column(type="boolean", nullable=false, options={"default" = 0})
     */
    protected $grade2_locked;


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
     * @return bool
     */
    public function isNps1Visible(): bool
    {
        return $this->nps1_visible;
    }

    /**
     * @param bool $nps1_visible
     */
    public function setNps1Visible(bool $nps1_visible): void
    {
        $this->nps1_visible = $nps1_visible;
    }

    /**
     * @return bool
     */
    public function isNps1Locked(): bool
    {
        return $this->nps1_locked;
    }

    /**
     * @param bool $nps1_locked
     */
    public function setNps1Locked(bool $nps1_locked): void
    {
        $this->nps1_locked = $nps1_locked;
    }

    /**
     * @return bool
     */
    public function isNps2Visible(): bool
    {
        return $this->nps2_visible;
    }

    /**
     * @param bool $nps2_visible
     */
    public function setNps2Visible(bool $nps2_visible): void
    {
        $this->nps2_visible = $nps2_visible;
    }

    /**
     * @return bool
     */
    public function isNps2Locked(): bool
    {
        return $this->nps2_locked;
    }

    /**
     * @param bool $nps2_locked
     */
    public function setNps2Locked(bool $nps2_locked): void
    {
        $this->nps2_locked = $nps2_locked;
    }

    /**
     * @return bool
     */
    public function isGrade1Visible(): bool
    {
        return $this->grade1_visible;
    }

    /**
     * @param bool $grade1_visible
     */
    public function setGrade1Visible(bool $grade1_visible): void
    {
        $this->grade1_visible = $grade1_visible;
    }

    /**
     * @return bool
     */
    public function isGrade1Locked(): bool
    {
        return $this->grade1_locked;
    }

    /**
     * @param bool $grade1_locked
     */
    public function setGrade1Locked(bool $grade1_locked): void
    {
        $this->grade1_locked = $grade1_locked;
    }

    /**
     * @return bool
     */
    public function isGrade2Visible(): bool
    {
        return $this->grade2_visible;
    }

    /**
     * @param bool $grade2_visible
     */
    public function setGrade2Visible(bool $grade2_visible): void
    {
        $this->grade2_visible = $grade2_visible;
    }

    /**
     * @return bool
     */
    public function isGrade2Locked(): bool
    {
        return $this->grade2_locked;
    }

    /**
     * @param bool $grade2_locked
     */
    public function setGrade2Locked(bool $grade2_locked): void
    {
        $this->grade2_locked = $grade2_locked;
    }

}