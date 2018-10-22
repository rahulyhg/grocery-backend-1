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
     * @var ActionStatus
     * Many Actions have One ActionStatus
     * @ORM\ManyToOne(targetEntity="Db\Entity\ActionStatus", inversedBy="action_status")
     * @ORM\JoinColumn(name="status_id", referencedColumnName="id", nullable=false)
     */
    protected $status;

    /**
     * @var Team
     * Many Actions have One Team
     * @ORM\ManyToOne(targetEntity="Team", inversedBy="actions")
     * @ORM\JoinColumn(name="team_id", referencedColumnName="id", nullable=false)
     */
    protected $team;

    /**
     * @var Survey
     * Many Actions have One Survey
     * @ORM\ManyToOne(targetEntity="Survey", inversedBy="actions")
     * @ORM\JoinColumn(name="survey_id", referencedColumnName="id", nullable=false)
     */
    protected $survey;

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

    function getStatus(): int {
        return $this->status;
    }

    function setStatus($status_id): void {
        $this->status = $status_id;
    }

    function getTeam(): Team {
        return $this->team;
    }

    function setTeam(Team $team): void {
        $this->team= $team;
    }

    function getSurvey(): Survey {
        return $this->survey;
    }

    function setSurvey(Survey $survey): void {
        $this->survey = $survey;
    }

    // "string" is not a typo. This "theme" is plain-text, by request
    function getTheme(): string {
        return $this->theme;
    }

    // "string" is not a typo. This "theme" is plain-text, by request
    function setTheme(string $theme): void {
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

    function setDescriptionAction(string $description_action): void {
        $this->description_action = $description_action;
    }

    function getDescriptionSolution(): string {
        return $this->description_solution;
    }
    
    function setDescriptionSolution(string $description_solution): void {
        $this->description_solution = $description_solution;
    }

    function getOwner(): string {
        return $this->owner;
    }

    function setOwner(string $owner): void {
        $this->owner = $owner;
    }

    function getCreationDate(): \DateTime {
        return $this->creation_date;
    }

    function setCreationDate(\DateTime $creation_date): void {
        $this->creation_date = $creation_date;
    }

    function getClosingDate(): \DateTime {
        return $this->closing_date;
    }

    function setClosingDate(\DateTime $closing_date): void {
        $this->closing_date = $closing_date;
    }

}
