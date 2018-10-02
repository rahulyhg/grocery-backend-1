<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * This class represents a survey item.
 * @ORM\Entity()
 * @ORM\Table(name="files")
 */
class File {
    
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var FileType
     * @ORM\ManyToOne(targetEntity="FileType")
     * @ORM\JoinColumn(name="filetype_id", referencedColumnName="id", nullable=false)
     */
    private $fileType;
    
    /**
     * @var string
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    protected $fileName;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $contents;
    
    /**
     * @return int
     */
    function getId(): int {
        return $this->id;
    }
    
    /**
     * @param int $id
     */
    function setId(int $id) {
        $this->id = $id;
    }
    
    /**
     * @return FileType
     */
    public function getFileType(): FileType
    {
        return $this->fileType;
    }
    
    /**
     * @param FileType $fileType
     */
    public function setFileType(FileType $fileType): void
    {
        $this->fileType = $fileType;
    }
    
    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }
    
    /**
     * @param string $fileName
     */
    public function setFileName(string $fileName): void
    {
        $this->fileName = $fileName;
    }
    
    /**
     * @return string
     */
    public function getContents(): string
    {
        return $this->contents;
    }
    
    /**
     * @param string $contents base64 string
     */
    public function setContents(string $contents): void
    {
        $this->contents = $contents;
    }
    
}
