<?php 

namespace DbAPI\V1\Rest\User;

use \ZF\Doctrine\Hydrator\Strategy\CollectionExtract;

class UserStrategy extends CollectionExtract {
    
    public function hydrate($value)
    {
        $object = $this->getObject();
        if(method_exists($object, 'setRoles')){
            $object->setRoles($value);
        }
        return $value;
    }
    
}