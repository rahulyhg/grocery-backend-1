<?php

namespace Application\Authorization;

use ZF\MvcAuth\MvcAuthEvent;

class AuthorizationListener
{
    public function __invoke(MvcAuthEvent $mvcAuthEvent)
    {
        $authorization = $mvcAuthEvent->getAuthorizationService();
        
        // Deny from all
        $authorization->deny();
        
        // Allow from all for oauth authentication
        $authorization->addResource('ZF\OAuth2\Controller\Auth::token');
        $authorization->allow(null, 'ZF\OAuth2\Controller\Auth::token');
        
        // Add application specific resources
        // $authorization->addResource('DbAPI\V1\Rest\Patient\Controller::collection');
        
        
        // \Doctrine\Common\Util\Debug::dump($authorization->getResources()); die;
        // \Doctrine\Common\Util\Debug::dump($authorization); die;
        
        $authorization->allow('user', 'DbAPI\V1\Rest\Patient\Controller::collection', 'GET');
        
    }
}
