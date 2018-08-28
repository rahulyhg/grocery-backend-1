<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * This class represents a page item.
 * @ORM\Entity()
 * @ORM\Table(name="pages")
 */
class Page {

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="title", type="string", length=50, nullable=true)
     */
    protected $title;

    /**
     * @ORM\Column(name="subtitle", type="string", length=50, nullable=true)
     */
    protected $subtitle;

    /**
     * @ORM\Column(name="locked", type="integer", length=4, nullable=false)
     */
    protected $locked;

    /**
     * Many Pages have Many Surveys.
     * @ORM\ManyToMany(targetEntity="Survey", inversedBy="pages")
     * @ORM\JoinTable(name="pages_surveys")
     */
    private $surveys;

    public function __construct() {
        $this->surveys = new ArrayCollection();
    }

    function getId() {
        return $this->id;
    }

    function getTitle() {
        return $this->title;
    }

    function getSubtitle() {
        return $this->subtitle;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setSubtitle($subtitle) {
        $this->subtitle = $subtitle;
    }

    /**
     * @return mixed
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * @param mixed $locked
     */
    public function setLocked($locked): void
    {
        $this->locked = $locked;
    }



}
