<?php
namespace DbAPI\V1\Rpc\GetSurveyByToken;

use PHPUnit\Runner\Exception;
use Zend\Mvc\Controller\AbstractActionController;
use ZF\ContentNegotiation\ViewModel;
use Db\Entity\Token;
use Application\Entity\User;
use DbAPI\V1\Rest\TokenCollection;
use Doctrine\ORM\EntityManager;
use Zend\View\Model\JsonModel;
use Zend\Hydrator\HydratorPluginManager;
use ZF\OAuth2\Doctrine\Adapter\DoctrineAdapter;

class GetSurveyByTokenController extends AbstractActionController
{
    /**
     * @var EntityManager
     */
    private $entityManager;
    
    private $doctrineOAuth2Adapter;
    
    private $config;
    
    /**
     * Constructor
     * @param EntityManager $entityManager
     */
    public function __construct(
        EntityManager $entityManager,
        DoctrineAdapter $doctrineOAuth2Adapter,
        ?array $config
    ) {
        $this->entityManager = $entityManager;
        $this->doctrineOAuth2Adapter = $doctrineOAuth2Adapter;
        
        if ($config === null || ($config !== null && $config['token-user'] === null)) {
            throw new Exception('no token-user configured');
        }
        $this->config = $config;
    }
    
    public function getSurveyByTokenAction()
    {
        $return = [];
        
        $test = $this->getEvent()->getRouteMatch()->getParam('token');
        
        $tokenRepository = $this->entityManager->getRepository(Token::class);

        /**
         * @var null|Token $token
         */
        $token = $tokenRepository->findOneBy([
            'token' => $test
        ]);
        
        if ($token === null) {
            $return['ok'] = false;
            $return['error'] = 'invalid token';
        } else {
            if ($token->getUsed()) {
                $return['ok'] = false;
                $return['error'] = 'used token';
            } else {
                $return['ok'] = true;
                $client_id = "testclient";
                $token_username = $this->config['token-user'];
                $expires_in = 3600;
                $scope = "DbAPI";
        
                $expires = time() + $expires_in;
                $token_user = $this->entityManager->getRepository(User::class)->findOneBy(['username' => $token_username, 'state' => 1]);
                if ($token_user === null) {
                    throw new Exception('configured token-user with username "' . $token_username . '" not found');
                }
                
                $user_id = $token_user->getId();
        
                $randomData = random_bytes(20);
                $access_token =  bin2hex($randomData);
                $this->doctrineOAuth2Adapter->setAccessToken($access_token, $client_id, $user_id, $expires, $scope);
        
                $randomData = random_bytes(20);
                $refresh_token = bin2hex($randomData);
                $this->doctrineOAuth2Adapter->setRefreshToken($refresh_token, $client_id, $user_id, $expires, $scope);
        
                $return['access_token'] = $access_token;
                $return['expires_in'] = 3600;
                $return['scope'] = $scope;
                $return['refresh_token'] = $refresh_token;
        
                $token->setUsed(true);
                $this->entityManager->persist($token);
                $this->entityManager->flush();
            }
        }
        
        return new JsonModel($return);
    }
}


