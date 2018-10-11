<?php
namespace DbAPI\V1\Rest\SurveySettingValue;

use ZF\Apigility\Doctrine\Server\Resource\DoctrineResource;
use Db\Entity\SurveySetting;


class SurveySettingValueResource extends DoctrineResource
{
    public function create($data)
    {
        $entityClass = $this->getEntityClass();
        
        $data = $this->getQueryCreateFilter()->filter($this->getEvent(), $entityClass, $data);
        if ($data instanceof ApiProblem) {
            return $data;
        }
    
        $entity = new $entityClass();
        $this->getHydrator()->hydrate((array) $data, $entity);
    
        if ($entity->getSetting()->getType()->getId() === SurveySetting::SETTING_TYPE_BOOLEAN && $data->value === false) {
            $data->value = '0';
        }
        
        return parent::create($data);
    }
    
    public function update($id, $data)
    {
        $entity = $this->findEntity($id, 'update', $data);
        
        if ($entity instanceof ApiProblem) {
            return $entity;
        }
        
        $this->getHydrator()->hydrate((array) $data, $entity);
    
        if ($entity->getSetting()->getType()->getId() === SurveySetting::SETTING_TYPE_BOOLEAN && $data->value === false) {
            $data->value = '0';
        }
        
        return parent::update($id, $data);
    }
}
