<?php
declare(strict_types = 1);

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity()
 * @ORM\Table(name="answers_given")
 */
class AnswerGiven {
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
     * @var Answer
     * @ORM\ManyToOne(targetEntity="Answer")
     * @ORM\JoinColumn(name="answer_id", referencedColumnName="id", nullable=true)
     */
    protected $answer;
    
    /**
     * @var int
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $value;
    
    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    protected $comment;

    /**
     * @var Action
     * Many AnswerGiven have One Action
     * @ORM\ManyToOne(targetEntity="Db\Entity\Action", inversedBy="answers_given")
     * @ORM\JoinColumn(name="action_id", referencedColumnName="id", nullable=true)
     */
    protected $action;
    
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
    
    /**
     * @return Answer|null
     */
    public function getAnswer(): ?Answer
    {
        return $this->answer;
    }
    
    /**
     * @param Answer|null $answer
     */
    public function setAnswer(?Answer $answer): void
    {
        $this->answer = $answer;
    }
    
    /**
     * @return int|null
     */
    public function getValue(): ?int
    {
        return $this->value;
    }
    
    /**
     * @param int|null $value
     */
    public function setValue(?int $value): void
    {
        $this->value = $value;
    }
    
    /**
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    
    /**
     * @param string|null $comment
     */
    public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }
    
}
