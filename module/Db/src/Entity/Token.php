<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * This class represents a token.
 * @ORM\Entity()
 * @ORM\Table(name="tokens")
 */
class Token {
    
    protected const TOKEN_TYPE_SINGLE = 1;
    protected const TOKEN_TYPE_SURVEY = 2;

    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="token", type="string", length=32, nullable=false, unique=true)
     */
    protected $token;
    
    /**
     * @var string
     * @ORM\Column(name="type", type="integer", length=1, nullable=false)
     */
    protected $type;

    /**
     * @var int
     * @ORM\Column(name="used", type="integer", length=6, nullable=false)
     */
    protected $used = 0;
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection|Survey[]
     * Many Tokens have One Survey.
     * @ORM\ManyToOne(targetEntity="Survey", inversedBy="tokens")
     * @ORM\JoinColumn(name="survey_id", referencedColumnName="id")
     */
    private $survey;
    
    
    public function __construct() {
        $this->setToken($this->generateToken());
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
    public function getToken(){
        return $this->token;
    }

    /**
     * @param string $token
     */
    public function setToken($token){
        $this->token = $token;
    }

    /**
     * @return string
     */
    public function getType(){
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type){
        $this->type = $type;
    }

    /**
     * @return integer
     */
    public function getUsed(){
        return $this->used;
    }

    /**
     * @param integer $used
     */
    public function setUsed($used){
        $this->used = $used;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection|Survey[]
     */
    public function getSurvey(){
        return $this->survey;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection|Survey[] $survey
     */
    public function setSurvey($survey){
        $this->survey = $survey;
    }
    
    private function generateToken() {
        $bytes = random_bytes(16);
        return bin2hex($bytes);
    }

}

