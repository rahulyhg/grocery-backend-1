<?php
return [
    'router' => [
        'routes' => [
            'db-api.rest.doctrine.page' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/page[/:page_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\Page\\Controller',
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
            'db-api.rest.doctrine.page-element' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/page-element[/:page_element_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\PageElement\\Controller',
                    ],
                ],
            ],
            'db-api.rest.doctrine.surveys-pages' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/surveys-pages[/:surveys_pages_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\SurveysPages\\Controller',
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
            'db-api.rest.doctrine.question' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/question[/:question_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\Question\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            2 => 'db-api.rest.doctrine.page',
            3 => 'db-api.rest.doctrine.token',
            4 => 'db-api.rest.doctrine.element',
            5 => 'db-api.rest.doctrine.answer',
            6 => 'db-api.rest.doctrine.page-element',
            7 => 'db-api.rest.doctrine.surveys-pages',
            0 => 'db-api.rest.doctrine.survey',
            8 => 'db-api.rest.doctrine.question',
        ],
        'default_version' => 1,
    ],
    'zf-rest' => [
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
        'DbAPI\\V1\\Rest\\SurveysPages\\Controller' => [
            'listener' => \DbAPI\V1\Rest\SurveysPages\SurveysPagesResource::class,
            'route_name' => 'db-api.rest.doctrine.surveys-pages',
            'route_identifier_name' => 'surveys_pages_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'surveys_pages',
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
            'entity_class' => \Db\Entity\SurveysPages::class,
            'collection_class' => \DbAPI\V1\Rest\SurveysPages\SurveysPagesCollection::class,
            'service_name' => 'SurveysPages',
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
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Db\Entity\Question::class,
            'collection_class' => \DbAPI\V1\Rest\Question\QuestionCollection::class,
            'service_name' => 'Question',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'DbAPI\\V1\\Rest\\Page\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Token\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Element\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Answer\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\PageElement\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\SurveysPages\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Survey\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Question\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'DbAPI\\V1\\Rest\\Page\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\Token\\Controller' => [
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
            'DbAPI\\V1\\Rest\\PageElement\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\SurveysPages\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\Survey\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\Question\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'DbAPI\\V1\\Rest\\Page\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\Token\\Controller' => [
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
            'DbAPI\\V1\\Rest\\PageElement\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\SurveysPages\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\Survey\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\Question\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
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
            \Db\Entity\SurveysPages::class => [
                'route_identifier_name' => 'surveys_pages_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.surveys-pages',
                'hydrator' => 'DbAPI\\V1\\Rest\\SurveysPages\\SurveysPagesHydrator',
            ],
            \DbAPI\V1\Rest\SurveysPages\SurveysPagesCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.surveys-pages',
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
        ],
    ],
    'zf-apigility' => [
        'doctrine-connected' => [
            \DbAPI\V1\Rest\Page\PageResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\Page\\PageHydrator',
            ],
            \DbAPI\V1\Rest\Token\TokenResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\Token\\TokenHydrator',
            ],
            \DbAPI\V1\Rest\Element\ElementResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\Element\\ElementHydrator',
            ],
            \DbAPI\V1\Rest\Answer\AnswerResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\Answer\\AnswerHydrator',
            ],
            \DbAPI\V1\Rest\PageElement\PageElementResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\PageElement\\PageElementHydrator',
            ],
            \DbAPI\V1\Rest\SurveysPages\SurveysPagesResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\SurveysPages\\SurveysPagesHydrator',
            ],
            \DbAPI\V1\Rest\Survey\SurveyResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\Survey\\SurveyHydrator',
            ],
            \DbAPI\V1\Rest\Question\QuestionResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\Question\\QuestionHydrator',
            ],
        ],
    ],
    'doctrine-hydrator' => [
        'DbAPI\\V1\\Rest\\Page\\PageHydrator' => [
            'entity_class' => \Db\Entity\Page::class,
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
        'DbAPI\\V1\\Rest\\PageElement\\PageElementHydrator' => [
            'entity_class' => \Db\Entity\PageElement::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'DbAPI\\V1\\Rest\\SurveysPages\\SurveysPagesHydrator' => [
            'entity_class' => \Db\Entity\SurveysPages::class,
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
        'DbAPI\\V1\\Rest\\Question\\QuestionHydrator' => [
            'entity_class' => \Db\Entity\Question::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
    ],
    'zf-content-validation' => [
        'DbAPI\\V1\\Rest\\Page\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\Page\\Validator',
        ],
        'DbAPI\\V1\\Rest\\Token\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\Token\\Validator',
        ],
        'DbAPI\\V1\\Rest\\Element\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\Element\\Validator',
        ],
        'DbAPI\\V1\\Rest\\Answer\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\Answer\\Validator',
        ],
        'DbAPI\\V1\\Rest\\PageElement\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\PageElement\\Validator',
        ],
        'DbAPI\\V1\\Rest\\SurveysPages\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\SurveysPages\\Validator',
        ],
        'DbAPI\\V1\\Rest\\Survey\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\Survey\\Validator',
        ],
        'DbAPI\\V1\\Rest\\Question\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\Question\\Validator',
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
        'DbAPI\\V1\\Rest\\SurveysPages\\Validator' => [
            0 => [
                'name' => 'pageOrder',
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
    ],
    'zf-mvc-auth' => [
        'authorization' => [
            'DbAPI\\V1\\Rest\\Survey\\Controller' => [
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
        ],
    ],
];
