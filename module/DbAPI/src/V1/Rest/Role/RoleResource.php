<?php
namespace DbAPI\V1\Rest\Role;

use ZF\Apigility\Doctrine\Server\Resource\DoctrineResource;
use ZF\ApiProblem\ApiProblem;

class RoleResource extends DoctrineResource
{
    public function delete($id)
    {
        if ($id == 1) {
            return new ApiProblem(403, 'The admin role cannot be deleted');
        }
        return parent::delete($id);
    }
}
