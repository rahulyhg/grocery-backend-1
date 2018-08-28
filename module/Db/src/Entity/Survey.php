<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * This class represents a survey item.
 * @ORM\Entity()
 * @ORM\Table(name="surveys")
 */
class Survey {

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="title", type="string", length=50, nullable=false)
     */
    protected $name = 'noname';

    /**
     * @ORM\Column(name="subtitle", type="string", length=50, nullable=true)
     */
    protected $description;
    
    /**
     * One Survey has Many tokens.
     * @ORM\OneToMany(targetEntity="Token", mappedBy="survey")
     */
    private $tokens;

    /**
     * Many Surveys have Many Pages.
     * @ORM\ManyToMany(targetEntity="Page", mappedBy="surveys")
     */
    private $pages;

    public function __construct() {
        $this->tokens = new ArrayCollection();
        $this->pages = new ArrayCollection();
    }

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getDescription() {
        return $this->description;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setDescription($description) {
        $this->description = $description;
    }
    
    function getTokens() {
        return $this->tokens;
    }

    function setTokens($tokens) {
        $this->tokens = $tokens;
    }

    /**
     * @return mixed
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * @param mixed $pages
     */
    public function setPages($pages): void
    {
        $this->pages = $pages;
    }

}
