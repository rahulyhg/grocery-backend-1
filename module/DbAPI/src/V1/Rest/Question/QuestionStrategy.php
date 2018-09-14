<?php 

namespace DbAPI\V1\Rest\Question;

use \ZF\Doctrine\Hydrator\Strategy\CollectionExtract;

class QuestionStrategy extends CollectionExtract {
    
    public function hydrate($value)
    {
        $object = $this->getObject();
        if(method_exists($object, 'setAnswers')){
            $object->setAnswers($value);
        }
        
        return $value;
    }
    
}