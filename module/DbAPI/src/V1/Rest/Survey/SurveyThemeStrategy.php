<?php

namespace DbAPI\V1\Rest\Survey;

use \ZF\Doctrine\Hydrator\Strategy\CollectionExtract;

class SurveyThemeStrategy extends CollectionExtract {

    public function hydrate($value)
    {
        $object = $this->getObject();
        if(method_exists($object, 'setSurveyThemeAssociations')) {
            $object->setSurveyThemeAssociations($value);
        }

        return $value;
    }

}

