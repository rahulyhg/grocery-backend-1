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
            'db-api.rest.doctrine.page-element' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/page-element[/:page_element_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\PageElement\\Controller',
                    ],
                ],
            ],
            'db-api.rest.doctrine.sub-theme' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/sub-theme[/:sub_theme_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\SubTheme\\Controller',
                    ],
                ],
            ],
            'db-api.rest.doctrine.theme' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/theme[/:theme_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\Theme\\Controller',
                    ],
                ],
            ],
            'db-api.rest.doctrine.customer' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/customer[/:customer_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\Customer\\Controller',
                    ],
                ],
            ],
            'db-api.rest.doctrine.team' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/team[/:team_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\Team\\Controller',
                    ],
                ],
            ],
            'db-api.rest.doctrine.survey-theme-association' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/survey-theme-association[/:survey_theme_association_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\SurveyThemeAssociation\\Controller',
                    ],
                ],
            ],
            'db-api.rest.doctrine.target-audience' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/target-audience[/:target_audience_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\TargetAudience\\Controller',
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
            4 => 'db-api.rest.doctrine.element',
            5 => 'db-api.rest.doctrine.answer',
            6 => 'db-api.rest.doctrine.page',
            7 => 'db-api.rest.doctrine.role',
            8 => 'db-api.rest.doctrine.user',
            9 => 'db-api.rest.doctrine.page-element',
            10 => 'db-api.rest.doctrine.sub-theme',
            11 => 'db-api.rest.doctrine.theme',
            12 => 'db-api.rest.doctrine.sub-theme',
            13 => 'db-api.rest.doctrine.customer',
            14 => 'db-api.rest.doctrine.team',
            15 => 'db-api.rest.doctrine.survey-theme-association',
            16 => 'db-api.rest.doctrine.target-audience',
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
            'collection_query_whitelist' => [
                0 => 'sort',
            ],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Db\Entity\PageElement::class,
            'collection_class' => \DbAPI\V1\Rest\PageElement\PageElementCollection::class,
            'service_name' => 'PageElement',
        ],
        'DbAPI\\V1\\Rest\\Theme\\Controller' => [
            'listener' => \DbAPI\V1\Rest\Theme\ThemeResource::class,
            'route_name' => 'db-api.rest.doctrine.theme',
            'route_identifier_name' => 'theme_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'theme',
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
            'entity_class' => \Db\Entity\Theme::class,
            'collection_class' => \DbAPI\V1\Rest\Theme\ThemeCollection::class,
            'service_name' => 'Theme',
        ],
        'DbAPI\\V1\\Rest\\SubTheme\\Controller' => [
            'listener' => \DbAPI\V1\Rest\SubTheme\SubThemeResource::class,
            'route_name' => 'db-api.rest.doctrine.sub-theme',
            'route_identifier_name' => 'sub_theme_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'sub_theme',
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
            'entity_class' => \Db\Entity\SubTheme::class,
            'collection_class' => \DbAPI\V1\Rest\SubTheme\SubThemeCollection::class,
            'service_name' => 'SubTheme',
        ],
        'DbAPI\\V1\\Rest\\Customer\\Controller' => [
            'listener' => \DbAPI\V1\Rest\Customer\CustomerResource::class,
            'route_name' => 'db-api.rest.doctrine.customer',
            'route_identifier_name' => 'customer_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'customer',
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
            'entity_class' => \Db\Entity\Customer::class,
            'collection_class' => \DbAPI\V1\Rest\Customer\CustomerCollection::class,
            'service_name' => 'Customer',
        ],
        'DbAPI\\V1\\Rest\\Team\\Controller' => [
            'listener' => \DbAPI\V1\Rest\Team\TeamResource::class,
            'route_name' => 'db-api.rest.doctrine.team',
            'route_identifier_name' => 'team_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'team',
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
            'entity_class' => \Db\Entity\Team::class,
            'collection_class' => \DbAPI\V1\Rest\Team\TeamCollection::class,
            'service_name' => 'Team',
        ],
        'DbAPI\\V1\\Rest\\SurveyThemeAssociation\\Controller' => [
            'listener' => \DbAPI\V1\Rest\SurveyThemeAssociation\SurveyThemeAssociationResource::class,
            'route_name' => 'db-api.rest.doctrine.survey-theme-association',
            'route_identifier_name' => 'survey_theme_association_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'survey_theme_association',
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
            'entity_class' => \Db\Entity\SurveyThemeAssociation::class,
            'collection_class' => \DbAPI\V1\Rest\SurveyThemeAssociation\SurveyThemeAssociationCollection::class,
            'service_name' => 'SurveyThemeAssociation',
        ],
        'DbAPI\\V1\\Rest\\TargetAudience\\Controller' => [
            'listener' => \DbAPI\V1\Rest\TargetAudience\TargetAudienceResource::class,
            'route_name' => 'db-api.rest.doctrine.target-audience',
            'route_identifier_name' => 'target_audience_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'target_audience',
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
            'entity_class' => \Db\Entity\TargetAudience::class,
            'collection_class' => \DbAPI\V1\Rest\TargetAudience\TargetAudienceCollection::class,
            'service_name' => 'TargetAudience',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'DbAPI\\V1\\Rest\\Question\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Token\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Survey\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Element\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Answer\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Page\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Role\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\User\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\PageElement\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Theme\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\SubTheme\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Customer\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Team\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\SurveyThemeAssociation\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\TargetAudience\\Controller' => 'HalJson',
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
            'DbAPI\\V1\\Rest\\PageElement\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\Theme\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\SubTheme\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\Customer\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\Team\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\SurveyThemeAssociation\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\TargetAudience\\Controller' => [
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
            'DbAPI\\V1\\Rest\\PageElement\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\Theme\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\SubTheme\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\Customer\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\Team\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\SurveyThemeAssociation\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\TargetAudience\\Controller' => [
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
                'max_depth' => 5,
            ],
            \DbAPI\V1\Rest\Survey\SurveyCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.survey',
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
                'max_depth' => 4,
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
            \Db\Entity\Theme::class => [
                'route_identifier_name' => 'theme_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.theme',
                'hydrator' => 'DbAPI\\V1\\Rest\\Theme\\ThemeHydrator',
                'max_depth' => 2,
            ],
            \DbAPI\V1\Rest\Theme\ThemeCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.theme',
                'is_collection' => true,
            ],
            \Db\Entity\SubTheme::class => [
                'route_identifier_name' => 'sub_theme_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.sub-theme',
                'hydrator' => 'DbAPI\\V1\\Rest\\SubTheme\\SubThemeHydrator',
                'max_depth' => 2,
            ],
            \DbAPI\V1\Rest\SubTheme\SubThemeCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.sub-theme',
                'is_collection' => true,
            ],
            \Db\Entity\Customer::class => [
                'route_identifier_name' => 'customer_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.customer',
                'hydrator' => 'DbAPI\\V1\\Rest\\Customer\\CustomerHydrator',
                'max_depth' => 2,
            ],
            \DbAPI\V1\Rest\Customer\CustomerCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.customer',
                'is_collection' => true,
            ],
            \Db\Entity\Team::class => [
                'route_identifier_name' => 'team_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.team',
                'hydrator' => 'DbAPI\\V1\\Rest\\Team\\TeamHydrator',
            ],
            \DbAPI\V1\Rest\Team\TeamCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.team',
                'is_collection' => true,
            ],
            \Db\Entity\SurveyThemeAssociation::class => [
                'route_identifier_name' => 'survey_theme_association_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.survey-theme-association',
                'hydrator' => 'DbAPI\\V1\\Rest\\SurveyThemeAssociation\\SurveyThemeAssociationHydrator',
            ],
            \DbAPI\V1\Rest\SurveyThemeAssociation\SurveyThemeAssociationCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.survey-theme-association',
                'is_collection' => true,
            ],
            \Db\Entity\TargetAudience::class => [
                'route_identifier_name' => 'target_audience_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.target-audience',
                'hydrator' => 'DbAPI\\V1\\Rest\\TargetAudience\\TargetAudienceHydrator',
            ],
            \DbAPI\V1\Rest\TargetAudience\TargetAudienceCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.target-audience',
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
            \DbAPI\V1\Rest\PageElement\PageElementResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\PageElement\\PageElementHydrator',
            ],
            \DbAPI\V1\Rest\Theme\ThemeResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\Theme\\ThemeHydrator',
            ],
            \DbAPI\V1\Rest\SubTheme\SubThemeResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\SubTheme\\SubThemeHydrator',
            ],
            \DbAPI\V1\Rest\Customer\CustomerResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\Customer\\CustomerHydrator',
            ],
            \DbAPI\V1\Rest\Team\TeamResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\Team\\TeamHydrator',
            ],
            \DbAPI\V1\Rest\SurveyThemeAssociation\SurveyThemeAssociationResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\SurveyThemeAssociation\\SurveyThemeAssociationHydrator',
            ],
            \DbAPI\V1\Rest\TargetAudience\TargetAudienceResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\TargetAudience\\TargetAudienceHydrator',
            ],
        ],
    ],
    'doctrine-hydrator' => [
        'DbAPI\\V1\\Rest\\Question\\QuestionHydrator' => [
            'entity_class' => \Db\Entity\Question::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [
                'answers' => 'dbapi.v1.extract.answers',
                'subtheme' => \ZF\Doctrine\Hydrator\Strategy\EntityLink::class,
            ],
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
            'strategies' => [
                'survey_theme_associations' => \ZF\Doctrine\Hydrator\Strategy\CollectionExtract::class,
                'targetaudiences' => 'dbapi.v1.extract.survey.targetaudiences',
            ],
            'use_generated_hydrator' => true,
        ],
        'DbAPI\\V1\\Rest\\Element\\ElementHydrator' => [
            'entity_class' => \Db\Entity\Element::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [
                'pageElements' => \ZF\Doctrine\Hydrator\Strategy\CollectionLink::class,
            ],
            'use_generated_hydrator' => true,
        ],
        'DbAPI\\V1\\Rest\\Answer\\AnswerHydrator' => [
            'entity_class' => \Db\Entity\Answer::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [
                'questions' => \ZF\Doctrine\Hydrator\Strategy\CollectionLink::class,
            ],
            'use_generated_hydrator' => true,
        ],
        'DbAPI\\V1\\Rest\\Page\\PageHydrator' => [
            'entity_class' => \Db\Entity\Page::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [
                'pageElements' => 'dbapi.v1.extract.pageElements',
            ],
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
            'strategies' => [
                'roles' => 'dbapi.v1.extract.roles',
            ],
            'use_generated_hydrator' => true,
        ],
        'DbAPI\\V1\\Rest\\PageElement\\PageElementHydrator' => [
            'entity_class' => \Db\Entity\PageElement::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [
                'page' => \ZF\Doctrine\Hydrator\Strategy\EntityLink::class,
            ],
            'use_generated_hydrator' => true,
        ],
        'DbAPI\\V1\\Rest\\Theme\\ThemeHydrator' => [
            'entity_class' => \Db\Entity\Theme::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [
                'subthemes' => \ZF\Doctrine\Hydrator\Strategy\CollectionExtract::class,
            ],
            'use_generated_hydrator' => true,
        ],
        'DbAPI\\V1\\Rest\\SubTheme\\SubThemeHydrator' => [
            'entity_class' => \Db\Entity\SubTheme::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [
                'questions' => \ZF\Doctrine\Hydrator\Strategy\CollectionExtract::class,
            ],
            'use_generated_hydrator' => true,
        ],
        'DbAPI\\V1\\Rest\\Customer\\CustomerHydrator' => [
            'entity_class' => \Db\Entity\Customer::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [
                'teams' => \ZF\Doctrine\Hydrator\Strategy\CollectionExtract::class,
            ],
            'use_generated_hydrator' => true,
        ],
        'DbAPI\\V1\\Rest\\Team\\TeamHydrator' => [
            'entity_class' => \Db\Entity\Team::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'DbAPI\\V1\\Rest\\SurveyThemeAssociation\\SurveyThemeAssociationHydrator' => [
            'entity_class' => \Db\Entity\SurveyThemeAssociation::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'DbAPI\\V1\\Rest\\TargetAudience\\TargetAudienceHydrator' => [
            'entity_class' => \Db\Entity\TargetAudience::class,
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
        'DbAPI\\V1\\Rest\\PageElement\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\PageElement\\Validator',
        ],
        'DbAPI\\V1\\Rest\\Theme\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\Theme\\Validator',
        ],
        'DbAPI\\V1\\Rest\\SubTheme\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\SubTheme\\Validator',
        ],
        'DbAPI\\V1\\Rest\\Customer\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\Customer\\Validator',
        ],
        'DbAPI\\V1\\Rest\\Team\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\Team\\Validator',
        ],
        'DbAPI\\V1\\Rest\\SurveyThemeAssociation\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\SurveyThemeAssociation\\Validator',
        ],
        'DbAPI\\V1\\Rest\\TargetAudience\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\TargetAudience\\Validator',
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
                            'max' => '512',
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
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\I18n\Validator\IsInt::class,
                        'options' => [],
                    ],
                    1 => [
                        'name' => \Zend\Validator\Between::class,
                        'options' => [
                            'min' => '1',
                            'max' => '2',
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'used',
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
                            'max' => 2048,
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
                            'max' => 128,
                        ],
                    ],
                ],
            ],
            4 => [
                'name' => 'state',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            5 => [
                'name' => 'securityCounter',
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
            6 => [
                'name' => 'lastLoginDateTime',
                'required' => false,
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
        'DbAPI\\V1\\Rest\\Theme\\Validator' => [
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
                            'max' => 128,
                        ],
                    ],
                ],
            ],
        ],
        'DbAPI\\V1\\Rest\\SubTheme\\Validator' => [
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
                            'max' => 128,
                        ],
                    ],
                ],
            ],
        ],
        'DbAPI\\V1\\Rest\\Customer\\Validator' => [
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
                            'max' => 128,
                        ],
                    ],
                ],
            ],
        ],
        'DbAPI\\V1\\Rest\\Team\\Validator' => [
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
                            'max' => 128,
                        ],
                    ],
                ],
            ],
        ],
        'DbAPI\\V1\\Rest\\SurveyThemeAssociation\\Validator' => [
            0 => [
                'name' => 'sortOrder',
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
        'DbAPI\\V1\\Rest\\TargetAudience\\Validator' => [
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
        ],
    ],
    'zf-mvc-auth' => [
        'authorization' => [
            'DbAPI\\V1\\Rest\\Question\\Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
            'DbAPI\\V1\\Rest\\Answer\\Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
            'DbAPI\\V1\\Rest\\Page\\Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
            'DbAPI\\V1\\Rest\\PageElement\\Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
            'DbAPI\\V1\\Rest\\Element\\Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
            'DbAPI\\V1\\Rest\\Token\\Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
            'DbAPI\\V1\\Rest\\Survey\\Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
            'DbAPI\\V1\\Rest\\Role\\Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
            'DbAPI\\V1\\Rest\\User\\Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
            'DbAPI\\V1\\Rest\\SurveyThemeAssociation\\Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
            'DbAPI\\V1\\Rest\\TargetAudience\\Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
            'DbAPI\\V1\\Rest\\Team\\Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
            'DbAPI\\V1\\Rest\\Customer\\Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
            'DbAPI\\V1\\Rest\\SubTheme\\Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
            'DbAPI\\V1\\Rest\\Theme\\Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
        ],
    ],
    'service_manager' => [
        'invokables' => [
            'dbapi.v1.extract.answers' => \DbAPI\V1\Rest\Question\QuestionStrategy::class,
            'dbapi.v1.extract.roles' => \DbAPI\V1\Rest\User\UserStrategy::class,
            'dbapi.v1.extract.pageElements' => \DbAPI\V1\Rest\Page\PageStrategy::class,
            /**
             * @deprecated
             */
            'dbapi.v1.extract.survey.pages' => \DbAPI\V1\Rest\Survey\PagesStrategy::class,
            'dbapi.v1.extract.survey.targetaudiences' => \DbAPI\V1\Rest\Survey\TargetaudiencesStrategy::class,
            'dbapi.v1.extract.themes' => \DbAPI\V1\Rest\Survey\SurveyThemeStrategy::class,
        ],
    ],
    'controllers' => [
        'factories' => [],
    ],
    'zf-rpc' => [],
];
