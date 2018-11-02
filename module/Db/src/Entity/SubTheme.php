<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity()
 * @ORM\Table(name="subthemes")
 */
class SubTheme {
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

    // VOLGNUMMER
    
    /**
     * @var Theme
     * Many SubThemes have One Theme.
     * @ORM\ManyToOne(targetEntity="Theme", inversedBy="subthemes")
     * @ORM\JoinColumn(name="theme_id", referencedColumnName="id", nullable=false)
     */
    private $theme;
    
    
    public function __construct() {
    }
    
    /**
     * @return integer
     */
    public function getId(){
        return $this->id;
    }
    
    /**
     * @param integer $id
     */
    public function setId($id){
        $this->id = $id;
    }
    
    /**
     * @return string
     */
    public function getName(){
        return $this->name;
    }
    
    /**
     * @param string $name
     */
    public function setName($name){
        $this->name = $name;
    }
    
    /**
     * @return Theme
     */
    public function getTheme(){
        return $this->theme;
    }
    
    /**
     * @param Theme $theme
     */
    public function setTheme($theme) {
        $this->theme = $theme;
    }

    


    // function getPage() {
    //     return $this->page;
    // }
    // function setPage($page) {
    //     $this->page = $page;
    // }

}

