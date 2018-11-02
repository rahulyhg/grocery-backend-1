<?php
declare(strict_types = 1);

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity()
 * @ORM\Table(name="survey_status")
 */
class SurveyStatus
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    protected $name = '';
    
    /**
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    protected $actionName = '';
    
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    
    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    
    /**
     * @return string
     */
    public function getActionName(): string
    {
        return $this->actionName;
    }
    
    /**
     * @param string $actionName
     */
    public function setActionName(string $actionName): void
    {
        $this->actionName = $actionName;
    }
    
    
}
