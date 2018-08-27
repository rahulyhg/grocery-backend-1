<?php
return [
    'zf-apigility' => [
        'doctrine-connected' => [
            \Status\V1\Rest\User\UserResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Status\\V1\\Rest\\User\\UserHydrator',
            ],
            \Status\V2\Rest\Patient\PatientResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Status\\V2\\Rest\\Patient\\PatientHydrator',
            ],
        ],
    ],
    'doctrine-hydrator' => [
        'Status\\V1\\Rest\\User\\UserHydrator' => [
            'entity_class' => \Application\Entity\User::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'Status\\V2\\Rest\\Patient\\PatientHydrator' => [
            'entity_class' => \Db\Entity\Patient::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
    ],
    'zf-versioning' => [
        'default_version' => 2,
        'uri' => [
            0 => 'status.rest.doctrine.patient',
        ],
    ],
    'router' => [
        'routes' => [
            'status.rest.doctrine.patient' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/patient[/:patient_id]',
                    'defaults' => [
                        'controller' => 'Status\\V2\\Rest\\Patient\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-rest' => [
        'Status\\V2\\Rest\\Patient\\Controller' => [
            'listener' => \Status\V2\Rest\Patient\PatientResource::class,
            'route_name' => 'status.rest.doctrine.patient',
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
            'collection_class' => \Status\V2\Rest\Patient\PatientCollection::class,
            'service_name' => 'Patient',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'Status\\V2\\Rest\\Patient\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'Status\\V2\\Rest\\Patient\\Controller' => [
                0 => 'application/vnd.status.v2+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'Status\\V2\\Rest\\Patient\\Controller' => [
                0 => 'application/vnd.status.v2+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \Db\Entity\Patient::class => [
                'route_identifier_name' => 'patient_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'status.rest.doctrine.patient',
                'hydrator' => 'Status\\V2\\Rest\\Patient\\PatientHydrator',
            ],
            \Status\V2\Rest\Patient\PatientCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'status.rest.doctrine.patient',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-content-validation' => [
        'Status\\V2\\Rest\\Patient\\Controller' => [
            'input_filter' => 'Status\\V2\\Rest\\Patient\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'Status\\V2\\Rest\\Patient\\Validator' => [
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
    ],
];
