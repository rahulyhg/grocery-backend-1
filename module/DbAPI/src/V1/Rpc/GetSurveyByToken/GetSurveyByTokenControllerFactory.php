<?php
namespace DbAPI\V1\Rpc\GetSurveyByToken;

use Doctrine\ORM\EntityManager;

class GetSurveyByTokenControllerFactory
{
    public function __invoke($container)
    {
        $config = $container->get('config');
        
        $applicationConfig = $config['token-user'] ?: null;
    
    
        return new GetSurveyByTokenController(
            $container->get(EntityManager::class),
            $container->get('oauth2.doctrineadapter.default'),
            $applicationConfig
        );
    }
}
