<?php

namespace DbAPI\V1\Rest\Survey;

use \ZF\Doctrine\Hydrator\Strategy\CollectionExtract;

class SettingsStrategy extends CollectionExtract {

    public function hydrate($value)
    {
        $object = $this->getObject();
        if(method_exists($object, 'setSettings')) {
            $object->setSettings($value);
        }

        return $value;
    }

}

