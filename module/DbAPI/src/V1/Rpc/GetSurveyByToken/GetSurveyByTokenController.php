<?php
namespace DbAPI\V1\Rpc\GetSurveyByToken;

use Zend\Mvc\Controller\AbstractActionController;
use ZF\ContentNegotiation\ViewModel;
use Db\Entity\Token;
use Db\Entity\Survey;
use DbAPI\V1\Rest\TokenCollection;
use Doctrine\ORM\EntityManager;
use Zend\View\Model\JsonModel;
use Zend\Hydrator\HydratorPluginManager;

class GetSurveyByTokenController extends AbstractActionController
{
    /**
     * @var EntityManager
     */
    private $entityManager;
    
    private $hydratorManager;
    
    /**
     * Constructor
     * @param EntityManager $entityManager
     */
    public function __construct(
        EntityManager $entityManager,
        HydratorPluginManager $hydratorManager
    ) {
        $this->entityManager = $entityManager;
        $this->hydratorManager = $hydratorManager;
    }
    
    public function getSurveyByTokenAction()
    {
        $test = $this->getEvent()->getRouteMatch()->getParam('token');
        
        $tokenRepository = $this->entityManager->getRepository(Token::class);

        /**
         * @var null|Token $token
         */
        $token = $tokenRepository->findOneBy([
            'token' => $test
        ]);
        
        /*
        $test = new \DbAPI\V1\Rest\Survey\SurveyResource();
        $test->setObjectManager($this->entityManager);
        */
        
        $hydrator = $this->hydratorManager->get('DbAPI\\V1\\Rest\\Survey\\SurveyHydrator');
        
        return new JsonModel([
            'ok' => $token !== null,
            // 'survey' => $token === null ? null : $test->getHydrator()->extract($token->getSurvey())
            'survey' => $token === null ? null : $hydrator->extract($token->getSurvey())
        ]);
    }
}


