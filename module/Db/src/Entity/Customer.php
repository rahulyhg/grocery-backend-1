<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * This class represents a customer
 * @ORM\Entity()
 * @ORM\Table(name="customers")
 */
class Customer {
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
     * One Customer has Many TeamGroups
     * @ORM\OneToMany(targetEntity="TeamGroup", mappedBy="customer")
     */
    protected $teamgroups;

    /**
     * One Customer has Many Questions
     * @ORM\OneToMany(targetEntity="Question", mappedBy="customer")
     */
    protected $questions;

    /**
     * One Customer has Many Users
     * @ORM\OneToMany(targetEntity="Application\Entity\User", mappedBy="customer")
     */
    protected $users;

    public function __construct() {
        $this->teams = new ArrayCollection();
    }

    function getId() {
        return $this->id;
    }
    
    function setId($id) {
        $this->id = $id;
    }

    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }

    public function getTeamgroups() {
        return $this->teamgroups;
    }
    
    public function setTeamgroups($teamgroups) {
        $this->teamgroups = $teamgroups;
    }

    public function addTeamGroup($teamgroup) {
        if ($this->teamgroups->contains($teamgroup)) {
            return;
        }
        $this->teamgroups->add($teamgroup);
        $teamgroup->setCustomer($this);
    }
    
    public  function removeTeamGroup($teamgroup) {
        if (!$this->teamgroups->contains($teamgroup)) {
            return;
        }
        $this->teamgroups->removeElement($teamgroup);
        $teamgroup->setCustomer(null);
    }

    public function addTeamGroups($teamgroups) {
        foreach ($teamgroups as $teamgroup) {
            $this->addTeam($teamgroup);
        }
    }
    
    public function removeTeamGroups($teamgroups) {
        foreach ($teamgroups as $teamgroup) {
            $this->removeTeam($teamgroup);
        }
    }

    public function getQuestions() {
        return $this->questions;
    }
    
    public function setQuestions($questions) {
        $this->questions = $questions;
    }

    public function addQuestion($question) {
        if ($this->questions->contains($question)) {
            return;
        }
        $this->questions->add($question);
        $question->setCustomer($this);
    }
    
    public function removeQuestion($question) {
        if (!$this->questions->contains($question)) {
            return;
        }
        $this->questions->removeElement($question);
        $question->setCustomer(null);
    }

    public function addQuestions($questions) {
        foreach ($questions as $question) {
            $this->addQuestion($question);
        }
    }
    
    public function removeQuestions($questions) {
        foreach ($questions as $question) {
            $this->removeQuestion($question);
        }
    }
    
    public function getUsers() {
        return $this->users;
    }
    
    public function setUsers($users) {
        $this->users = $users;
    }

    public function addUser($user) {
        if ($this->users->contains($user)) {
            return;
        }
        $this->users->add($user);
        $user->setCustomer($this);
    }
    
    public  function removeUser($user) {
        if (!$this->users->contains($user)) {
            return;
        }
        $this->users->removeElement($user);
        $user->setCustomer(null);
    }

    public function addUsers($users) {
        foreach ($users as $team) {
            $this->addTeam($team);
        }
    }
    
    public function removeUsers($users) {
        foreach ($users as $team) {
            $this->removeTeam($team);
        }
    }
}