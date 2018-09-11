<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * This class represents a page element.
 * @ORM\Entity()
 * @ORM\Table(name="pages_elements")
 */
class PageElement {

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Many PageElements have One Page.
     * @ORM\ManyToOne(targetEntity="Page", inversedBy="pageElements")
     * @ORM\JoinColumn(name="page_id", referencedColumnName="id")
     */
    private $page;

    /**
     * Many PageElements have One Element.
     * @ORM\ManyToOne(targetEntity="Element", inversedBy="pageElements", fetch="EAGER")
     * @ORM\JoinColumn(name="element_id", referencedColumnName="id")
     */
    private $element;

    /**
     * @ORM\Column(name="element_order", type="integer", length=11, nullable=false)
     */
    protected $elementOrder = 0;

    /**
     * @ORM\Column(name="locked", type="integer", length=4, nullable=false)
     */
    protected $locked = 0;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param mixed $page
     */
    public function setPage($page): void
    {
        $this->page = $page;
    }

    /**
     * @return mixed
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * @param mixed $element
     */
    public function setElement($element): void
    {
        $this->element = $element;
    }

    /**
     * @return mixed
     */
    public function getElementOrder()
    {
        return $this->elementOrder;
    }

    /**
     * @param mixed $elementOrder
     */
    public function setElementOrder($elementOrder): void
    {
        $this->elementOrder = $elementOrder;
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
