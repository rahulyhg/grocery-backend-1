<?php

namespace DbAPI\V1\Rest\Survey;

use \ZF\Doctrine\Hydrator\Strategy\CollectionExtract;

/**
 * @deprecated
 */
class PagesStrategy extends CollectionExtract {

    public function hydrate($value)
    {
        $object = $this->getObject();
        if(method_exists($object, 'setPages')) {
            $object->setPages($value);
        }

        return $value;
    }

}

