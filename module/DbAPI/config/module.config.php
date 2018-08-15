<?php
return [
    'router' => [
        'routes' => [
            'db-api.rest.doctrine.patient' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/patient[/:patient_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\Patient\\Controller',
                    ],
                ],
            ],
            'db-api.rest.doctrine.procedure' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/procedure[/:procedure_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\Procedure\\Controller',
                    ],
                ],
            ],
            'db-api.rest.doctrine.hospital' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/hospital[/:hospital_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\Hospital\\Controller',
                    ],
                ],
            ],
            'db-api.rest.doctrine.user' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/user[/:user_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\User\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'db-api.rest.doctrine.patient',
            2 => 'db-api.rest.doctrine.procedure',
            3 => 'db-api.rest.doctrine.hospital',
            4 => 'db-api.rest.doctrine.user',
        ],
    ],
    'zf-rest' => [
        'DbAPI\\V1\\Rest\\Patient\\Controller' => [
            'listener' => \DbAPI\V1\Rest\Patient\PatientResource::class,
            'route_name' => 'db-api.rest.doctrine.patient',
            'route_identifier_name' => 'patient_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'patient',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Db\Entity\Patient::class,
            'collection_class' => \DbAPI\V1\Rest\Patient\PatientCollection::class,
            'service_name' => 'Patient',
        ],
        'DbAPI\\V1\\Rest\\Procedure\\Controller' => [
            'listener' => \DbAPI\V1\Rest\Procedure\ProcedureResource::class,
            'route_name' => 'db-api.rest.doctrine.procedure',
            'route_identifier_name' => 'procedure_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'procedure',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Db\Entity\Procedure::class,
            'collection_class' => \DbAPI\V1\Rest\Procedure\ProcedureCollection::class,
            'service_name' => 'Procedure',
        ],
        'DbAPI\\V1\\Rest\\Hospital\\Controller' => [
            'listener' => \DbAPI\V1\Rest\Hospital\HospitalResource::class,
            'route_name' => 'db-api.rest.doctrine.hospital',
            'route_identifier_name' => 'hospital_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'hospital',
            'entity_http_methods' => [
                0 => 'GET',
            ],
            'collection_http_methods' => [
                0 => 'GET',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Db\Entity\Hospital::class,
            'collection_class' => \DbAPI\V1\Rest\Hospital\HospitalCollection::class,
            'service_name' => 'Hospital',
        ],
        'DbAPI\\V1\\Rest\\User\\Controller' => [
            'listener' => \DbAPI\V1\Rest\User\UserResource::class,
            'route_name' => 'db-api.rest.doctrine.user',
            'route_identifier_name' => 'user_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'user',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Application\Entity\User::class,
            'collection_class' => \DbAPI\V1\Rest\User\UserCollection::class,
            'service_name' => 'User',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'DbAPI\\V1\\Rest\\Patient\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Procedure\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Hospital\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\User\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'DbAPI\\V1\\Rest\\Patient\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\Procedure\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\Hospital\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\User\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'DbAPI\\V1\\Rest\\Patient\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\Procedure\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\Hospital\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\User\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \Db\Entity\Patient::class => [
                'route_identifier_name' => 'patient_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.patient',
                'hydrator' => 'DbAPI\\V1\\Rest\\Patient\\PatientHydrator',
            ],
            \DbAPI\V1\Rest\Patient\PatientCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.patient',
                'is_collection' => true,
            ],
            \Db\Entity\Procedure::class => [
                'route_identifier_name' => 'procedure_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.procedure',
                'hydrator' => 'DbAPI\\V1\\Rest\\Procedure\\ProcedureHydrator',
            ],
            \DbAPI\V1\Rest\Procedure\ProcedureCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.procedure',
                'is_collection' => true,
            ],
            \Db\Entity\Hospital::class => [
                'route_identifier_name' => 'hospital_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.hospital',
                'hydrator' => 'DbAPI\\V1\\Rest\\Hospital\\HospitalHydrator',
            ],
            \DbAPI\V1\Rest\Hospital\HospitalCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.hospital',
                'is_collection' => true,
            ],
            \Application\Entity\User::class => [
                'route_identifier_name' => 'user_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.user',
                'hydrator' => 'DbAPI\\V1\\Rest\\User\\UserHydrator',
            ],
            \DbAPI\V1\Rest\User\UserCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.user',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'doctrine-connected' => [
            \DbAPI\V1\Rest\Patient\PatientResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\Patient\\PatientHydrator',
            ],
            \DbAPI\V1\Rest\Procedure\ProcedureResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\Procedure\\ProcedureHydrator',
            ],
            \DbAPI\V1\Rest\Hospital\HospitalResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\Hospital\\HospitalHydrator',
            ],
            \DbAPI\V1\Rest\User\UserResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\User\\UserHydrator',
            ],
        ],
    ],
    'doctrine-hydrator' => [
        'DbAPI\\V1\\Rest\\Patient\\PatientHydrator' => [
            'entity_class' => \Db\Entity\Patient::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'DbAPI\\V1\\Rest\\Procedure\\ProcedureHydrator' => [
            'entity_class' => \Db\Entity\Procedure::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'DbAPI\\V1\\Rest\\Hospital\\HospitalHydrator' => [
            'entity_class' => \Db\Entity\Hospital::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'DbAPI\\V1\\Rest\\User\\UserHydrator' => [
            'entity_class' => \Application\Entity\User::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
    ],
    'zf-content-validation' => [
        'DbAPI\\V1\\Rest\\Patient\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\Patient\\Validator',
        ],
        'DbAPI\\V1\\Rest\\Procedure\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\Procedure\\Validator',
        ],
        'DbAPI\\V1\\Rest\\Hospital\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\Hospital\\Validator',
        ],
        'DbAPI\\V1\\Rest\\User\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\User\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'DbAPI\\V1\\Rest\\Patient\\Validator' => [
            0 => [
                'name' => 'lastname',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 255,
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'lastnameSearchImage',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 66,
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'lastnamePrefix',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 255,
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'initials',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 250,
                        ],
                    ],
                ],
            ],
            4 => [
                'name' => 'bsn',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 250,
                        ],
                    ],
                ],
            ],
            5 => [
                'name' => 'bsnSearchImage',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 250,
                        ],
                    ],
                ],
            ],
            6 => [
                'name' => 'birthdate',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
        ],
        'DbAPI\\V1\\Rest\\Hospital\\Validator' => [
            0 => [
                'name' => 'name',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 255,
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'city',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 255,
                        ],
                    ],
                ],
                'allow_empty' => true,
            ],
            2 => [
                'name' => 'inactive',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
        ],
        'DbAPI\\V1\\Rest\\Procedure\\Validator' => [
            0 => [
                'name' => 'procdate',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
        ],
        'DbAPI\\V1\\Rest\\User\\Validator' => [
            0 => [
                'name' => 'username',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 255,
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'email',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 255,
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'displayName',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 50,
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'password',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 128,
                        ],
                    ],
                ],
            ],
            4 => [
                'name' => 'state',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            5 => [
                'name' => 'securityCounter',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            6 => [
                'name' => 'lastLoginDateTime',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
        ],
    ],
    'zf-mvc-auth' => [
        'authorization' => [
            'DbAPI\\V1\\Rest\\Procedure\\Controller' => [
                'collection' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
            ],
            'DbAPI\\V1\\Rest\\Patient\\Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
            ],
        ],
    ],
];
