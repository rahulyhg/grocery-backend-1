<?php

namespace DbAPI\V1\Rest\Survey;

use \ZF\Doctrine\Hydrator\Strategy\CollectionExtract;

class TargetaudiencesStrategy extends CollectionExtract {

    public function hydrate($value)
    {
        $object = $this->getObject();
        if(method_exists($object, 'setTargetaudiences')) {
            $object->setTargetaudiences($value);
        }

        return $value;
    }

}

