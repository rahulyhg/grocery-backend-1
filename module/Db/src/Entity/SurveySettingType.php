<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="surveys_settings_types")
 */
class SurveySettingType
{
    
    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(type="string", length=16)
     */
    protected $id;
    
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    
    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }
    
}