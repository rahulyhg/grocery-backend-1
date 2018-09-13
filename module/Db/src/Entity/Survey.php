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
     * @ORM\Column(name="type", type="string", length=50, nullable=true)
     */
    protected $type;
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection|Token[]
     * One Survey has Many tokens.
     * @ORM\OneToMany(targetEntity="Token", mappedBy="survey")
     */
    private $tokens;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection|Page[]
     * Many Surveys have Many Pages.
     * @ORM\ManyToMany(targetEntity="Page", inversedBy="surveys")
     * @ORM\JoinTable(name="pages_surveys")
     */
    private $pages;

    public function __construct() {
        $this->tokens = new ArrayCollection();
        $this->pages  = new ArrayCollection();
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

    function getType() {
        return $this->type;
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

    function setType($type) {
        $this->type = $type;
    }
    
    /**
     * @return \Doctrine\Common\Collections\ArrayCollection|Token[]
     */
    function getTokens() {
        return $this->tokens;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection|Token[] $tokens
     */
    function setTokens($tokens) {
        $this->tokens = $tokens;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection|Page[]
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection|Page[] $pages
     */
    public function setPages($pages): void
    {
        $this->pages = $pages;
    }
    
    /**
     * @param Page $page
     */
    public function addPage(Page $page) {
        if ($this->pages->contains($page)) {
            return;
        }
        $this->pages->add($page);
        $page->addSurvey($this);
    }
    
    /**
     * @param Page $page
     */
    public function removePage(Page $page) {
        if (! $this->pages->contains($page)) {
            return;
        }
        $this->pages->removeElement($page);
        $page->removeSurvey($this);
    }

}
