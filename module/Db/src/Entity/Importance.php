<?php
declare(strict_types = 1);

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity()
 * @ORM\Table(name="importances")
 */
class Importance {
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var Response
     * @ORM\ManyToOne(targetEntity="Response")
     * @ORM\JoinColumn(name="response_id", referencedColumnName="id", nullable=false)
     */
    protected $response;
    
    /**
     * @var Question
     * @ORM\ManyToOne(targetEntity="Question")
     * @ORM\JoinColumn(name="question_id", referencedColumnName="id", nullable=false)
     */
    protected $question;
    
    /**
     * @return int
     */
    function getId(): int {
        return $this->id;
    }
    
    /**
     * @param int $id
     */
    function setId(int $id): void {
        $this->id = $id;
    }
    
    /**
     * @return Response
     */
    public function getResponse(): Response
    {
        return $this->response;
    }
    
    /**
     * @param Response $response
     */
    public function setResponse(Response $response): void
    {
        $this->response = $response;
    }
    
    /**
     * @return Question
     */
    public function getQuestion(): Question
    {
        return $this->question;
    }
    
    /**
     * @param Question $question
     */
    public function setQuestion(Question $question): void
    {
        $this->question = $question;
    }
}
