<?php
return [
    'router' => [
        'routes' => [
            'db-api.rest.doctrine.question' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/question[/:question_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\Question\\Controller',
                    ],
                ],
            ],
            'db-api.rest.doctrine.token' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/token[/:token_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\Token\\Controller',
                    ],
                ],
            ],
            'db-api.rest.doctrine.survey' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/survey[/:survey_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\Survey\\Controller',
                    ],
                ],
            ],
            'db-api.rest.doctrine.page-element' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/page-element[/:page_element_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\PageElement\\Controller',
                    ],
                ],
            ],
            'db-api.rest.doctrine.element' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/element[/:element_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\Element\\Controller',
                    ],
                ],
            ],
            'db-api.rest.doctrine.answer' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/answer[/:answer_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\Answer\\Controller',
                    ],
                ],
            ],
            'db-api.rest.doctrine.page' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/page[/:page_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\Page\\Controller',
                    ],
                ],
            ],
            'db-api.rest.doctrine.role' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/role[/:role_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\Role\\Controller',
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
            0 => 'db-api.rest.doctrine.question',
            1 => 'db-api.rest.doctrine.token',
            2 => 'db-api.rest.doctrine.survey',
            3 => 'db-api.rest.doctrine.page-element',
            4 => 'db-api.rest.doctrine.element',
            5 => 'db-api.rest.doctrine.answer',
            6 => 'db-api.rest.doctrine.page',
            7 => 'db-api.rest.doctrine.role',
            8 => 'db-api.rest.doctrine.user',
        ],
    ],
    'zf-rest' => [
        'DbAPI\\V1\\Rest\\Question\\Controller' => [
            'listener' => \DbAPI\V1\Rest\Question\QuestionResource::class,
            'route_name' => 'db-api.rest.doctrine.question',
            'route_identifier_name' => 'question_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'question',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
                2 => 'PUT',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Db\Entity\Question::class,
            'collection_class' => \DbAPI\V1\Rest\Question\QuestionCollection::class,
            'service_name' => 'Question',
        ],
        'DbAPI\\V1\\Rest\\Token\\Controller' => [
            'listener' => \DbAPI\V1\Rest\Token\TokenResource::class,
            'route_name' => 'db-api.rest.doctrine.token',
            'route_identifier_name' => 'token_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'token',
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
            'entity_class' => \Db\Entity\Token::class,
            'collection_class' => \DbAPI\V1\Rest\Token\TokenCollection::class,
            'service_name' => 'Token',
        ],
        'DbAPI\\V1\\Rest\\Survey\\Controller' => [
            'listener' => \DbAPI\V1\Rest\Survey\SurveyResource::class,
            'route_name' => 'db-api.rest.doctrine.survey',
            'route_identifier_name' => 'survey_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'survey',
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
            'entity_class' => \Db\Entity\Survey::class,
            'collection_class' => \DbAPI\V1\Rest\Survey\SurveyCollection::class,
            'service_name' => 'Survey',
        ],
        'DbAPI\\V1\\Rest\\PageElement\\Controller' => [
            'listener' => \DbAPI\V1\Rest\PageElement\PageElementResource::class,
            'route_name' => 'db-api.rest.doctrine.page-element',
            'route_identifier_name' => 'page_element_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'page_element',
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
            'entity_class' => \Db\Entity\PageElement::class,
            'collection_class' => \DbAPI\V1\Rest\PageElement\PageElementCollection::class,
            'service_name' => 'PageElement',
        ],
        'DbAPI\\V1\\Rest\\Element\\Controller' => [
            'listener' => \DbAPI\V1\Rest\Element\ElementResource::class,
            'route_name' => 'db-api.rest.doctrine.element',
            'route_identifier_name' => 'element_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'element',
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
            'entity_class' => \Db\Entity\Element::class,
            'collection_class' => \DbAPI\V1\Rest\Element\ElementCollection::class,
            'service_name' => 'Element',
        ],
        'DbAPI\\V1\\Rest\\Answer\\Controller' => [
            'listener' => \DbAPI\V1\Rest\Answer\AnswerResource::class,
            'route_name' => 'db-api.rest.doctrine.answer',
            'route_identifier_name' => 'answer_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'answer',
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
            'entity_class' => \Db\Entity\Answer::class,
            'collection_class' => \DbAPI\V1\Rest\Answer\AnswerCollection::class,
            'service_name' => 'Answer',
        ],
        'DbAPI\\V1\\Rest\\Page\\Controller' => [
            'listener' => \DbAPI\V1\Rest\Page\PageResource::class,
            'route_name' => 'db-api.rest.doctrine.page',
            'route_identifier_name' => 'page_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'page',
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
            'entity_class' => \Db\Entity\Page::class,
            'collection_class' => \DbAPI\V1\Rest\Page\PageCollection::class,
            'service_name' => 'Page',
        ],
        'DbAPI\\V1\\Rest\\Role\\Controller' => [
            'listener' => \DbAPI\V1\Rest\Role\RoleResource::class,
            'route_name' => 'db-api.rest.doctrine.role',
            'route_identifier_name' => 'role_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'role',
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
            'entity_class' => \Application\Entity\Role::class,
            'collection_class' => \DbAPI\V1\Rest\Role\RoleCollection::class,
            'service_name' => 'Role',
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
            'DbAPI\\V1\\Rest\\Question\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Token\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Survey\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\PageElement\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Element\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Answer\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Page\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Role\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\User\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'DbAPI\\V1\\Rest\\Question\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\Token\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\Survey\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\PageElement\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\Element\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\Answer\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\Page\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\Role\\Controller' => [
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
            'DbAPI\\V1\\Rest\\Question\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\Token\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\Survey\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\PageElement\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\Element\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\Answer\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\Page\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\Role\\Controller' => [
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
            \Db\Entity\Question::class => [
                'route_identifier_name' => 'question_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.question',
                'hydrator' => 'DbAPI\\V1\\Rest\\Question\\QuestionHydrator',
            ],
            \DbAPI\V1\Rest\Question\QuestionCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.question',
                'is_collection' => true,
            ],
            \Db\Entity\Token::class => [
                'route_identifier_name' => 'token_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.token',
                'hydrator' => 'DbAPI\\V1\\Rest\\Token\\TokenHydrator',
            ],
            \DbAPI\V1\Rest\Token\TokenCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.token',
                'is_collection' => true,
            ],
            \Db\Entity\Survey::class => [
                'route_identifier_name' => 'survey_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.survey',
                'hydrator' => 'DbAPI\\V1\\Rest\\Survey\\SurveyHydrator',
            ],
            \DbAPI\V1\Rest\Survey\SurveyCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.survey',
                'is_collection' => true,
            ],
            \Db\Entity\PageElement::class => [
                'route_identifier_name' => 'page_element_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.page-element',
                'hydrator' => 'DbAPI\\V1\\Rest\\PageElement\\PageElementHydrator',
            ],
            \DbAPI\V1\Rest\PageElement\PageElementCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.page-element',
                'is_collection' => true,
            ],
            \Db\Entity\Element::class => [
                'route_identifier_name' => 'element_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.element',
                'hydrator' => 'DbAPI\\V1\\Rest\\Element\\ElementHydrator',
            ],
            \DbAPI\V1\Rest\Element\ElementCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.element',
                'is_collection' => true,
            ],
            \Db\Entity\Answer::class => [
                'route_identifier_name' => 'answer_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.answer',
                'hydrator' => 'DbAPI\\V1\\Rest\\Answer\\AnswerHydrator',
            ],
            \DbAPI\V1\Rest\Answer\AnswerCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.answer',
                'is_collection' => true,
            ],
            \Db\Entity\Page::class => [
                'route_identifier_name' => 'page_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.page',
                'hydrator' => 'DbAPI\\V1\\Rest\\Page\\PageHydrator',
            ],
            \DbAPI\V1\Rest\Page\PageCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.page',
                'is_collection' => true,
            ],
            \Application\Entity\Role::class => [
                'route_identifier_name' => 'role_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.role',
                'hydrator' => 'DbAPI\\V1\\Rest\\Role\\RoleHydrator',
            ],
            \DbAPI\V1\Rest\Role\RoleCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.role',
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
            \DbAPI\V1\Rest\Question\QuestionResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\Question\\QuestionHydrator',
            ],
            \DbAPI\V1\Rest\Token\TokenResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\Token\\TokenHydrator',
            ],
            \DbAPI\V1\Rest\Survey\SurveyResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\Survey\\SurveyHydrator',
            ],
            \DbAPI\V1\Rest\PageElement\PageElementResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\PageElement\\PageElementHydrator',
            ],
            \DbAPI\V1\Rest\Element\ElementResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\Element\\ElementHydrator',
            ],
            \DbAPI\V1\Rest\Answer\AnswerResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\Answer\\AnswerHydrator',
            ],
            \DbAPI\V1\Rest\Page\PageResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\Page\\PageHydrator',
            ],
            \DbAPI\V1\Rest\Role\RoleResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\Role\\RoleHydrator',
            ],
            \DbAPI\V1\Rest\User\UserResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\User\\UserHydrator',
            ],
        ],
    ],
    'doctrine-hydrator' => [
        'DbAPI\\V1\\Rest\\Question\\QuestionHydrator' => [
            'entity_class' => \Db\Entity\Question::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'DbAPI\\V1\\Rest\\Token\\TokenHydrator' => [
            'entity_class' => \Db\Entity\Token::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'DbAPI\\V1\\Rest\\Survey\\SurveyHydrator' => [
            'entity_class' => \Db\Entity\Survey::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'DbAPI\\V1\\Rest\\PageElement\\PageElementHydrator' => [
            'entity_class' => \Db\Entity\PageElement::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'DbAPI\\V1\\Rest\\Element\\ElementHydrator' => [
            'entity_class' => \Db\Entity\Element::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'DbAPI\\V1\\Rest\\Answer\\AnswerHydrator' => [
            'entity_class' => \Db\Entity\Answer::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'DbAPI\\V1\\Rest\\Page\\PageHydrator' => [
            'entity_class' => \Db\Entity\Page::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'DbAPI\\V1\\Rest\\Role\\RoleHydrator' => [
            'entity_class' => \Application\Entity\Role::class,
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
        'DbAPI\\V1\\Rest\\Question\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\Question\\Validator',
        ],
        'DbAPI\\V1\\Rest\\Token\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\Token\\Validator',
        ],
        'DbAPI\\V1\\Rest\\Survey\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\Survey\\Validator',
        ],
        'DbAPI\\V1\\Rest\\PageElement\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\PageElement\\Validator',
        ],
        'DbAPI\\V1\\Rest\\Element\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\Element\\Validator',
        ],
        'DbAPI\\V1\\Rest\\Answer\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\Answer\\Validator',
        ],
        'DbAPI\\V1\\Rest\\Page\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\Page\\Validator',
        ],
        'DbAPI\\V1\\Rest\\Role\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\Role\\Validator',
        ],
        'DbAPI\\V1\\Rest\\User\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\User\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'DbAPI\\V1\\Rest\\Question\\Validator' => [
            0 => [
                'name' => 'text',
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
                            'max' => 50,
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'required',
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
            2 => [
                'name' => 'type',
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
            3 => [
                'name' => 'rangeMin',
                'required' => false,
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
            4 => [
                'name' => 'rangeMax',
                'required' => false,
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
            5 => [
                'name' => 'allowExplanation',
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
        ],
        'DbAPI\\V1\\Rest\\Token\\Validator' => [
            0 => [
                'name' => 'token',
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
                            'max' => 32,
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'type',
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
                'name' => 'used',
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
        ],
        'DbAPI\\V1\\Rest\\Survey\\Validator' => [
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
                            'max' => 50,
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'description',
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
        ],
        'DbAPI\\V1\\Rest\\PageElement\\Validator' => [
            0 => [
                'name' => 'elementOrder',
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
            1 => [
                'name' => 'locked',
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
        ],
        'DbAPI\\V1\\Rest\\Element\\Validator' => [
            0 => [
                'name' => 'type',
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
                'name' => 'text',
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
        ],
        'DbAPI\\V1\\Rest\\Answer\\Validator' => [
            0 => [
                'name' => 'value',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
        ],
        'DbAPI\\V1\\Rest\\Page\\Validator' => [
            0 => [
                'name' => 'title',
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
            1 => [
                'name' => 'subtitle',
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
            2 => [
                'name' => 'locked',
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
        ],
        'DbAPI\\V1\\Rest\\Role\\Validator' => [
            0 => [
                'name' => 'roleId',
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
            'DbAPI\\V1\\Rest\\Question\\Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => true,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => true,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
            ],
        ],
    ],
];
