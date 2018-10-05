<?php
namespace DbAPI\V1\Rpc\GetSurveyByToken;

use Doctrine\ORM\EntityManager;

class GetSurveyByTokenControllerFactory
{
    public function __invoke($container)
    {
        $config = $container->get('config');
//        $doctrineHydratorConfig = $config['doctrine-hydrator'];
        
        
        return new GetSurveyByTokenController(
            $container->get(EntityManager::class), 
            $container->get('HydratorManager')
        );
    }
}
