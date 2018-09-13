<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;
use Db\Entity\PageElement;

/**
 * This class represents a page item.
 * @ORM\Entity()
 * @ORM\Table(name="pages")
 */
class Page {

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11, options={"unsigned":true})
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
     * @var \Doctrine\Common\Collections\ArrayCollection|Survey[]
     * Many Pages have Many Surveys.
     * @ORM\ManyToMany(targetEntity="Survey", mappedBy="pages")
     */
    private $surveys;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection|PageElement[]
     * One Page has Many Page Elements.
     * @ORM\OneToMany(targetEntity="PageElement", mappedBy="page", orphanRemoval=true )
     * @ORM\OrderBy({"elementOrder"="ASC"})
     */
    private $pageElements;



    public function __construct() {
        $this->surveys = new ArrayCollection();
        $this->pageElements = new ArrayCollection();
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

    /**
     * @return mixed
     */
    public function getSurveys()
    {
        return $this->surveys;
    }

    /**
     * @param mixed $surveys
     */
    public function setSurveys($surveys): void
    {
        $this->surveys = $surveys;
    }
    
    /**
     * @param Survey $survey
     */
    public function addSurvey(Survey $survey) {
        if ($this->pages->contains($survey)) {
            return;
        }
        $this->surveys->add($survey);
        $survey->addPage($this);
    }
    
    /**
     * @param Page $page
     */
    public function removeSurvey(Survey $survey) {
        if (! $this->surveys->contains($survey)) {
            return;
        }
        $this->surveys->removeElement($survey);
        $survey->removePage($this);
    }
    
    
    public function addSurveys($surveys) {
        foreach ($surveys as $survey) {
            $this->addSurvey($survey);
        }
    }
    public function removeSurveys($surveys) {
        foreach ($surveys as $survey) {
            $this->removeSurvey($survey);
        }
    }

    /**
     * @return mixed
     */
    public function getPageElements()
    {
        return $this->pageElements;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection|PageElement[]
     */
    public function setPageElements($pageElements): void
    {
        $this->pageElements = $pageElements;
    }
    
    /**
     * @param PageElement $pageElement
     */
    public function addPageElement(PageElement $pageElement) {
        if ($this->pageElements->contains($pageElement)) {
            return;
        }
        $this->pageElements->add($pageElement);
    }
    
    /**
     * @param \Doctrine\Common\Collections\ArrayCollection|PageElement[]
     */
    public function addPageElements($pageElements) {
        foreach ($pageElements as $pageElement) {
            $this->addPageElement($pageElement);
        }
    }
    
    /**
     * @param PageElement $pageElement
     */
    public function removePageElement($pageElement) {
        if (! $this->pageElements->contains($pageElement)) {
            return;
        }
        $this->pageElements->removeElement($pageElement);
    }
    
    /**
     * @param \Doctrine\Common\Collections\ArrayCollection|PageElement[]
     */
    public function removePageElements($pageElements) {
        foreach ($pageElements as $pageElement) {
            $this->removePageElement($pageElement);
        }
    }


    // function getPage() {
    //     return $this->page;
    // }
    // function setPage($page) {
    //     $this->page = $page;
    // }
    // function getSubTheme() {
    //     return $this->subtheme;
    // }
    // function setSubTheme($subtheme) {
    //     $this->subtheme = $subtheme;
    // }

}
