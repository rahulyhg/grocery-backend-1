<?php

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
	 * @ORM\ManyToOne(targetEntity="Customer", inversedBy="teams")
	 * @ORM\JoinColumn(name="customer_id", referencedColumnName="id", nullable=false)
	 */
	protected $customer;

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

    public function getCustomer() {
    	return $this->customer;
    }
    public function setCustomer($customer) {
    	$this->customer = $customer;
    }
}