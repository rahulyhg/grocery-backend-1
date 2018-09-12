<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * This class represents a survey item.
 * @ORM\Entity()
 * @ORM\Table(name="themes")
 */
class Theme {
    
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

    protected $number;

    // PICT ID

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection|SubTheme[]
     * One Theme has Many SubThemes
     * @ORM\OneToMany(targetEntity="SubTheme", mappedBy="theme")
     */
    private $subthemes;
    
    public function __construct() {
        $this->subthemes  = new ArrayCollection();
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
    
    /**
     * @return \Doctrine\Common\Collections\ArrayCollection|SubTheme[]
     */
    function getSubthemes() {
        return $this->subthemes;
    }
    
    /**
     * @param \Doctrine\Common\Collections\ArrayCollection|SubTheme[] $subthemes
     */
    function setSubthemes($subthemes) {
        $this->subthemes = $subthemes;
    }
    
    /**
     * @param SubTheme $subtheme
     * @return void
     */
    public function addSubtheme(SubTheme $subtheme) {
        if ($this->subthemes->contains($subtheme)) {
            return;
        }
        
        $this->subthemes->add($subtheme);
        $subtheme->setTheme($this);
    }
    
    /**
     * @param SubTheme $subtheme
     * @return void
     */
    public function removeSubtheme(SubTheme $subtheme) {
        if (!$this->subthemes->contains($subtheme)) {
            return;
        }
        
        $this->subthemes->removeElement($subtheme);
        $subtheme->setTheme(null);
    }

    public function addSubthemes($subthemes) {
        foreach ($subthemes as $subtheme) {
            $this->addSubtheme($subtheme);
        }
    }
    public function removeSubthemes($subthemes) {
        foreach ($subthemes as $subtheme) {
            $this->removeSubtheme($subtheme);
        }
    }
}
