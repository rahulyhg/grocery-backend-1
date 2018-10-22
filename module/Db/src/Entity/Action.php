<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * This class represents a survey item.
 * @ORM\Entity()
 * @ORM\Table(name="actions")
 */
class Action {
    
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Many Actions have One ActionStatus
     * @ORM\ManyToOne(targetEntity="Db\Entity\ActionStatus", inversedBy="action_status")
     * @ORM\JoinColumn(name="status_id", referencedColumnName="id", nullable=false)
     */
    protected $status_id;

    /**
     * Many Actions have One Team
     * @ORM\ManyToOne(targetEntity="Team", inversedBy="actions")
     * @ORM\JoinColumn(name="team_id", referencedColumnName="id", nullable=false)
     */
    protected $team_id;

    /**
     * Many Actions have One Survey
     * @ORM\ManyToOne(targetEntity="Survey", inversedBy="actions")
     * @ORM\JoinColumn(name="survey_id", referencedColumnName="id", nullable=false)
     */
    protected $survey_id;

    /**
     * @var string
     * @ORM\Column(name="theme", type="string", length=128, nullable=false)
     */
    protected $theme;

    /**
     * @var string
     * @ORM\Column(name="cause", type="string", length=128, nullable=false)
     */
    protected $cause;

    /**
     * @var string
     * @ORM\Column(name="description_action", type="string", length=128, nullable=false)
     */
    protected $description_action;

    /**
     * @var string
     * @ORM\Column(name="description_solution", type="string", length=128, nullable=false)
     */
    protected $description_solution;

    /**
     * @var string
     * @ORM\Column(name="owner", type="string", length=128, nullable=false)
     */
    protected $owner;
    
    /**
     * @var \DateTime
     * @ORM\Column(name="creation_date", type="datetime", nullable=false)
     */
    protected $creation_date;
    
    /**
     * @var \DateTime
     * @ORM\Column(name="closing_date", type="datetime", nullable=true)
     */
    protected $closing_date;


    
    /**
     * @return int
     */
    function getId(): int {
        return $this->id;
    }
    
    /**
     * @param int $id
     */
    function setId(int $id) {
        $this->id = $id;
    }

    // Sorry, no /****/ things here. Dode lijn.

    function getStatusId(): int {
        return $this->status_id;
    }

    function setStatusId($status_id): void {
        $this->status_id = $status_id;
    }

    function getTeamId(): int {
        return $this->team_id;
    }

    function setTeamId($team_id): void {
        $this->team_id = $team_id;
    }

    function getSurveyId(): int {
        return $this->survey_id;
    }

    function setSurveyId($survey_id): void {
        $this->survey_id = $survey_id;
    }

    function getTheme(): string {
        return $this->theme;
    }
    
    function setTheme($theme): void {
        $this->theme = $theme;
    }

    function getCause(): string {
        return $this->cause;
    }

    function setCause($cause): void {
        $this->cause = $cause;
    }

    function getDescriptionAction(): string {
        return $this->description_action;
    }

    function setDescriptionAction($description_action): void {
        $this->description_action = $description_action;
    }

    function getDescriptionSolution(): string {
        return $this->description_solution;
    }
    
    function setDescriptionSolution($description_solution): void {
        $this->description_solution = $description_solution;
    }

    function getOwner(): string {
        return $this->owner;
    }

    function setOwner($owner): void {
        $this->owner = $owner;
    }

    function getCreationDate(): \DateTime {
        return $this->creation_date;
    }

    function setCreationDate($creation_date): void {
        $this->creation_date = $creation_date;
    }

    function getClosingDate(): \DateTime {
        return $this->closing_date;
    }

    function setClosingDate($closing_date): void {
        $this->closing_date = $closing_date;
    }

}
