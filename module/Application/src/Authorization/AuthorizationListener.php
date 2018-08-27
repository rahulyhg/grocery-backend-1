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

        $authorization->addResource('DbAPI\\V1\\Rest\\User\\Controller::index');
        $authorization->allow('guest','DbAPI\\V1\\Rest\\User\\Controller::index');

    }
}