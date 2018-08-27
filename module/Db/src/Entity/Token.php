<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * This class represents a answer item.
 * @ORM\Entity()
 * @ORM\Table(name="tokens")
 */
class Token {

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="token", type="string", length=32, nullable=false)
     */
    protected $token;
    
        /**
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    protected $type;

        /**
     * @ORM\Column(name="used", type="integer", length=6, nullable=false)
     */
    protected $used;
    
    /**
     * Many Tokens have One Survey.
     * @ORM\ManyToOne(targetEntity="Survey", inversedBy="tokens")
     * @ORM\JoinColumn(name="survey_id", referencedColumnName="id")
     */
    private $survey;
    

}
