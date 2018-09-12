<?php

namespace Application\Authorization;

use ZF\MvcAuth\MvcAuthEvent;

class AuthorizationListener
{
    private $allMethods = ['GET', 'POST', 'PUT', 'PATCH', 'DELETE'];

    public function __invoke(MvcAuthEvent $mvcAuthEvent)
    {
        $authorization = $mvcAuthEvent->getAuthorizationService();
        $mvcEvent   = $mvcAuthEvent->getMvcEvent();
        $routeMatch = $mvcEvent->getRouteMatch();

        // Deny from all
        $authorization->allow();

        if (strpos((string)$routeMatch->getMatchedRouteName(), 'zf-apigility') === 0) {
            /** @var \ZF\MvcAuth\Authorization\AclAuthorization $authorization */
            $authorization = $mvcAuthEvent->getAuthorizationService();
            $authorization->allow($authorization->getRoles());
        } else {

            // Allow from all for oauth authentication
            $authorization->addResource('ZF\OAuth2\Controller\Auth::token');
            $authorization->allow(null, 'ZF\OAuth2\Controller\Auth::token');

            $this->_allowAll($authorization, 'reportsadmin');


        }
    }

    private function _allowAll($authorization, $role)
    {
      $authorization->allow($role, 'DbAPI\V1\Rest\Answer\Controller::collection', $this->allMethods);
      $authorization->allow($role, 'DbAPI\V1\Rest\Answer\Controller::entity',     $this->allMethods);

      $authorization->allow($role, 'DbAPI\V1\Rest\Element\Controller::collection', $this->allMethods);
      $authorization->allow($role, 'DbAPI\V1\Rest\Element\Controller::entity',     $this->allMethods);

      $authorization->allow($role, 'DbAPI\V1\Rest\Page\Controller::collection', $this->allMethods);
      $authorization->allow($role, 'DbAPI\V1\Rest\Page\Controller::entity',     $this->allMethods);

      $authorization->allow($role, 'DbAPI\V1\Rest\PageElement\Controller::collection', $this->allMethods);
      $authorization->allow($role, 'DbAPI\V1\Rest\PageElement\Controller::entity',     $this->allMethods);

      $authorization->allow($role, 'DbAPI\V1\Rest\Question\Controller::collection', $this->allMethods);
      $authorization->allow($role, 'DbAPI\V1\Rest\Question\Controller::entity',     $this->allMethods);

      $authorization->allow($role, 'DbAPI\V1\Rest\Role\Controller::collection', $this->allMethods);
      $authorization->allow($role, 'DbAPI\V1\Rest\Role\Controller::entity',     $this->allMethods);

      $authorization->allow($role, 'DbAPI\V1\Rest\Survey\Controller::collection', $this->allMethods);
      $authorization->allow($role, 'DbAPI\V1\Rest\Survey\Controller::entity',     $this->allMethods);

      $authorization->allow($role, 'DbAPI\V1\Rest\Token\Controller::collection', $this->allMethods);
      $authorization->allow($role, 'DbAPI\V1\Rest\Token\Controller::entity',     $this->allMethods);

      $authorization->allow($role, 'DbAPI\V1\Rest\User\Controller::collection', $this->allMethods);
      $authorization->allow($role, 'DbAPI\V1\Rest\User\Controller::entity',     $this->allMethods);
    }
}

