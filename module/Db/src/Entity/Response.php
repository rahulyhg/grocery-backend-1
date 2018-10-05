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
     * @deprecated Customer and TeamGroup should be removed (are defined by Team)
     * @var Customer
     * @ORM\ManyToOne(targetEntity="Customer")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id", nullable=false)
     */
    protected $customer;
    
    /**
     * @deprecated Customer and TeamGroup should be removed (are defined by Team)
     * @var TeamGroup
     * @ORM\ManyToOne(targetEntity="TeamGroup")
     * @ORM\JoinColumn(name="teamgroup_id", referencedColumnName="id", nullable=false)
     */
    protected $teamgroup;
    
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
     * @return Customer
     */
    public function getCustomer(): Customer {
        return $this->customer;
    }
    
    /**
     * @param Customer $customer
     */
    public function setCustomer(Customer $customer): void {
        $this->customer = $customer;
    }
    
    public function getTeamgroup(): TeamGroup {
        return $this->teamgroup;
    }
    
    public function setTeamgroup(TeamGroup $teamgroup): void {
        $this->teamgroup = $teamgroup;
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
