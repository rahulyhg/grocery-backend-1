<?php
declare(strict_types = 1);

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * This class represents a customer
 * @ORM\Entity()
 * @ORM\Table(name="teams")
 */
class Team {
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    protected $name;

    /**
     * Many Teams have One Customer
     * @ORM\ManyToOne(targetEntity="TeamGroup", inversedBy="teams")
     * @ORM\JoinColumn(name="teamgroup_id", referencedColumnName="id", nullable=false)
     */
    protected $teamgroup;

    public function __construct() {
        $this->teams = new ArrayCollection();
    }

    function getId(): int {
        return $this->id;
    }

    function setId(int $id): void {
        $this->id = $id;
    }
    
    function getName(): string {
        return $this->name;
    }

    function setName(string $name): void {
        $this->name = $name;
    }

    public function getTeamgroup(): TeamGroup {
        return $this->teamgroup;
    }
    
    public function setTeamgroup(TeamGroup $teamgroup): void {
        $this->teamgroup = $teamgroup;
    }
}
