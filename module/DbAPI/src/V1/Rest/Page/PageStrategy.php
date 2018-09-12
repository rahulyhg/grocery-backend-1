<?php

namespace DbAPI\V1\Rest\Page;

use DoctrineModule\Stdlib\Hydrator\Strategy\AllowRemoveByValue;
use ZF\Hal\Collection;

/*
 * Uses AllowRemoveByValue::hydrate and extract as in
 * ZF\Doctrine\Hydrator\Strategy\CollectionExtract
 */
class PageStrategy extends AllowRemoveByValue {

    public function hydrate($value)
    {
        return parent::hydrate($value);
    }
    
    public function extract($value)
    {
        $value = ($value) ?: [];
        $halCollection = new Collection($value);
        
        return $halCollection;
    }
    
}

