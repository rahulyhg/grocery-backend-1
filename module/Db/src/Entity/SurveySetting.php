<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="surveys_settings")
 */
class SurveySetting
{
    public const SETTING_TYPE_BOOLEAN = 'boolean';
    public const SETTING_TYPE_INTEGER = 'integer';
    public const SETTING_TYPE_STRING  = 'string';
    
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     * @ORM\Column(type="string", nullable=false, unique=true)
     */
    protected $name;
    
    /**
     * @var string
     * @ORM\Column(name="type", type="string", length=8, nullable=false)
     */
    protected $type;
    
    protected $validTypes = [
        self::SETTING_TYPE_BOOLEAN,
        self::SETTING_TYPE_INTEGER,
        self::SETTING_TYPE_STRING
    ];
    
    /**
     * @return int
     */
    public function getId(): int
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
    public function getType(): string
    {
        return $this->type;
    }
    
    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        if (!in_array($type, $this->validTypes)) {
            throw new \Exception('invalid SurveySetting type');
        }
        $this->type = $type;
    }
    
}