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
	 * @ORM\Column(name="id", type="integer", length=11)
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\Column(name="name", type="string", length=128, nullable=false)
	 */
	protected $name;

	/**
	 * One Customer has Many Teams
	 * @ORM\OneToMany(targetEntity="Team", mappedBy="customer")
	 */
	protected $teams;

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

    function getName() {
        return $this->name;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    public function getTeams() {
    	return $this->teams;
    }
    public function setTeams($teams) {
    	$this->teams = $teams;
    }

    public function addTeam($team) {
    	if ($this->teams->contains($team)) {
    		return;
    	}
    	$this->teams->add($team);
    	$team->setCustomer($this);
    }
    public  function removeTeam($team) {
    	if (!$this->teams->contains($team)) {
    		return;
    	}
    	$this->teams->removeElement($team);
    	$team->setCustomer(null);
    }

    public function addTeams($teams) {
    	foreach ($teams as $team) {
    		$this->addTeam($team);
    	}
    }
    public function removeTeams($teams) {
    	foreach ($teams as $team) {
    		$this->removeTeam($team);
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