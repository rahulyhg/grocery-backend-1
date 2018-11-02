<?php
declare(strict_types = 1);

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity()
 * @ORM\Table(name="teamgroups")
 */
class TeamGroup {
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    protected $name;

    /**
     * @var Customer
     * Many Teams have One Customer
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="teamgroups")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id", nullable=false)
     */
    protected $customer;
    
    /**
     * @ORM\OneToMany(targetEntity="Team", mappedBy="teamgroup")
     */
    protected $teams;

    public function __construct() {
        $this->teams = new ArrayCollection();
    }
    
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
     * @return string
     */
    function getName(): string {
        return $this->name;
    }
    
    /**
     * @param string $name
     */
    function setName(string $name): void {
        $this->name = $name;
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
    
    public function getTeams() {
        return $this->teams;
    }
    
    public function setTeams($teams) {
        $this->teams = $teams;
    }
    
    public function addTeam(Team $team): void {
        if ($this->teams->contains($team)) {
            return;
        }
        $this->teams->add($team);
        $team->setTeamgroup($this);
    }
    
    public function removeTeam(Team $team): void {
        if (!$this->teams->contains($team)) {
            return;
        }
        $this->teams->removeElement($team);
        $team->setTeamgroup(null);
    }
    
    public function addTeams($teams): void {
        foreach ($teams as $team) {
            $this->addTeam($team);
        }
    }
    
    public function removeTeams($teams): void {
        foreach ($teams as $team) {
            $this->removeTeam($team);
        }
    }
}
