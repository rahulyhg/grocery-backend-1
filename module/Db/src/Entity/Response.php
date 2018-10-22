<?php
declare(strict_types = 1);

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity()
 * @ORM\Table(name="responses")
 */
class Response {
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var Team
     * @ORM\ManyToOne(targetEntity="Team")
     * @ORM\JoinColumn(name="team_id", referencedColumnName="id", nullable=false)
     */
    protected $team;
    
    /**
     * @var Survey
     * @ORM\ManyToOne(targetEntity="Survey")
     * @ORM\JoinColumn(name="survey_id", referencedColumnName="id", nullable=false)
     */
    protected $survey;
    
    /**
     * @var TargetAudience
     * @ORM\ManyToOne(targetEntity="TargetAudience")
     * @ORM\JoinColumn(name="targetaudience_id", referencedColumnName="id", nullable=false)
     */
    protected $targetaudience;

    /**
     * @var string
     * @ORM\Column(name="improve_text", type="string", length=128, nullable=true)
     */
    protected $improve_text;

    /**
     * @var string
     * @ORM\Column(name="explanation_text", type="string", length=128, nullable=true)
     */
    protected $explanation_text;
    
    /**
     * @var \DateTime
     * @ORM\Column(name="response_date", type="datetime", nullable=false)
     */
    protected $responseDate;
    
    /**
     * @var bool
     * @ORM\Column(type="boolean", nullable=false, options={"default" = 0})
     */
    protected $complete;

    /**
     * Many Responses have One Action
     * @ORM\ManyToOne(targetEntity="Action", inversedBy="actions")
     * @ORM\JoinColumn(name="action_id", referencedColumnName="id")
     */
    protected $action;
    
    /**
     * @return int
     */
    function getId(): int {
        return $this->id;
    }
    
    /**
     * @param int $id
     */
    function setId(int $id): void {
        $this->id = $id;
    }

    /**
     * @return Team
     */
    public function getTeam(): Team {
        return $this->team;
    }
    
    /**
     * @param Team $team
     */
    public function setTeam(Team $team): void {
        $this->team = $team;
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

    public function getImproveText(): string {
        return $this->improve_text;
    }

    public function setImproveText($improve_text): void {
        $this->improve_text = $improve_text;
    }

    public function getExplanationText(): string {
        return $this->explanation_text;
    }

    public function setExplanationText($explanation_text): void {
        $this->explanation_text = $explanation_text;
    }

    /**
     * @return Action
     */
    public function getAction(): Action {
        return $this->action;
    }

    /**
     * @param Action $action
     */
    public function setAction(Action $action): void {
        $this->action = $action;
    }
    
    /**
     * @return TargetAudience
     */
    public function getTargetaudience(): TargetAudience {
        return $this->targetaudience;
    }
    
    /**
     * @param TargetAudience $targetaudience
     */
    public function setTargetaudience(TargetAudience $targetaudience): void {
        $this->targetaudience = $targetaudience;
    }
    
    /**
     * @return \DateTime
     */
    public function getResponseDate(): \DateTime
    {
        return $this->responseDate;
    }
    
    /**
     * @param \DateTime $responseDate
     */
    public function setResponseDate(\DateTime $responseDate): void
    {
        $this->responseDate = $responseDate;
    }
    
    /**
     * @return bool
     */
    public function isComplete(): bool
    {
        return $this->complete;
    }
    
    /**
     * @param bool $complete
     */
    public function setComplete(bool $complete): void
    {
        $this->complete = $complete;
    }
    
}
