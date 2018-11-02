<?php
namespace DbAPI\V1\Rest\User;

use ZF\Apigility\Doctrine\Server\Resource\DoctrineResource;
use ZF\ApiProblem\ApiProblem;

class UserResource extends DoctrineResource
{
    
    /**
     * Delete the user
     *
     * @param mixed $id
     * @return ApiProblem|mixed
     */
    public function delete($id) {
        if ($id == 1) {
            return new ApiProblem(403, 'The admin user cannot be deleted');
        }
        
        return parent::delete($id);
    }
    
}
