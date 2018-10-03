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
            'db-api.rest.doctrine.formulation' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/formulation[/:formulation_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\Formulation\\Controller',
                    ],
                ],
            ],
            'db-api.rest.doctrine.survey-theme-element' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/survey-theme-element[/:survey_theme_element_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\SurveyThemeElement\\Controller',
                    ],
                ],
            ],
            'db-api.rest.doctrine.survey-setting' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/survey-setting[/:survey_setting_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\SurveySetting\\Controller',
                    ],
                ],
            ],
            'db-api.rest.doctrine.survey-setting-value' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/survey-setting-value[/:survey_setting_value_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\SurveySettingValue\\Controller',
                    ],
                ],
            ],
            'db-api.rest.doctrine.survey-setting-type' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/survey-setting-type[/:survey_setting_type_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\SurveySettingType\\Controller',
                    ],
                ],
            ],
            'db-api.rest.doctrine.survey-status' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/survey-status[/:survey_status_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\SurveyStatus\\Controller',
                    ],
                ],
            ],
            'db-api.rest.doctrine.file-type' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/file-type[/:file_type_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\FileType\\Controller',
                    ],
                ],
            ],
            'db-api.rest.doctrine.file' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/file[/:file_id]',
                    'defaults' => [
                        'controller' => 'DbAPI\\V1\\Rest\\File\\Controller',
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
            7 => 'db-api.rest.doctrine.role',
            8 => 'db-api.rest.doctrine.user',
            10 => 'db-api.rest.doctrine.sub-theme',
            11 => 'db-api.rest.doctrine.theme',
            12 => 'db-api.rest.doctrine.sub-theme',
            13 => 'db-api.rest.doctrine.customer',
            14 => 'db-api.rest.doctrine.team',
            15 => 'db-api.rest.doctrine.survey-theme-association',
            16 => 'db-api.rest.doctrine.target-audience',
            17 => 'db-api.rest.doctrine.formulation',
            18 => 'db-api.rest.doctrine.survey-theme-element',
            19 => 'db-api.rest.doctrine.survey-setting',
            20 => 'db-api.rest.doctrine.survey-setting-value',
            21 => 'db-api.rest.doctrine.survey-setting-type',
            22 => 'db-api.rest.doctrine.survey-status',
            23 => 'db-api.rest.doctrine.file-type',
            24 => 'db-api.rest.doctrine.file',
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
        'DbAPI\\V1\\Rest\\Formulation\\Controller' => [
            'listener' => \DbAPI\V1\Rest\Formulation\FormulationResource::class,
            'route_name' => 'db-api.rest.doctrine.formulation',
            'route_identifier_name' => 'formulation_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'formulation',
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
            'entity_class' => \Db\Entity\Formulation::class,
            'collection_class' => \DbAPI\V1\Rest\Formulation\FormulationCollection::class,
            'service_name' => 'Formulation',
        ],
        'DbAPI\\V1\\Rest\\SurveyThemeElement\\Controller' => [
            'listener' => \DbAPI\V1\Rest\SurveyThemeElement\SurveyThemeElementResource::class,
            'route_name' => 'db-api.rest.doctrine.survey-theme-element',
            'route_identifier_name' => 'survey_theme_element_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'survey_theme_element',
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
            'entity_class' => \Db\Entity\SurveyThemeElement::class,
            'collection_class' => \DbAPI\V1\Rest\SurveyThemeElement\SurveyThemeElementCollection::class,
            'service_name' => 'SurveyThemeElement',
        ],
        'DbAPI\\V1\\Rest\\SurveySetting\\Controller' => [
            'listener' => \DbAPI\V1\Rest\SurveySetting\SurveySettingResource::class,
            'route_name' => 'db-api.rest.doctrine.survey-setting',
            'route_identifier_name' => 'survey_setting_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'survey_setting',
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
            'entity_class' => \Db\Entity\SurveySetting::class,
            'collection_class' => \DbAPI\V1\Rest\SurveySetting\SurveySettingCollection::class,
            'service_name' => 'SurveySetting',
        ],
        'DbAPI\\V1\\Rest\\SurveySettingValue\\Controller' => [
            'listener' => \DbAPI\V1\Rest\SurveySettingValue\SurveySettingValueResource::class,
            'route_name' => 'db-api.rest.doctrine.survey-setting-value',
            'route_identifier_name' => 'survey_setting_value_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'survey_setting_value',
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
            'entity_class' => \Db\Entity\SurveySettingValue::class,
            'collection_class' => \DbAPI\V1\Rest\SurveySettingValue\SurveySettingValueCollection::class,
            'service_name' => 'SurveySettingValue',
        ],
        'DbAPI\\V1\\Rest\\SurveySettingType\\Controller' => [
            'listener' => \DbAPI\V1\Rest\SurveySettingType\SurveySettingTypeResource::class,
            'route_name' => 'db-api.rest.doctrine.survey-setting-type',
            'route_identifier_name' => 'survey_setting_type_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'survey_setting_type',
            'entity_http_methods' => [
                0 => 'GET',
            ],
            'collection_http_methods' => [
                0 => 'GET',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Db\Entity\SurveySettingType::class,
            'collection_class' => \DbAPI\V1\Rest\SurveySettingType\SurveySettingTypeCollection::class,
            'service_name' => 'SurveySettingType',
        ],
        'DbAPI\\V1\\Rest\\SurveyStatus\\Controller' => [
            'listener' => \DbAPI\V1\Rest\SurveyStatus\SurveyStatusResource::class,
            'route_name' => 'db-api.rest.doctrine.survey-status',
            'route_identifier_name' => 'survey_status_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'survey_status',
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
            'entity_class' => \Db\Entity\SurveyStatus::class,
            'collection_class' => \DbAPI\V1\Rest\SurveyStatus\SurveyStatusCollection::class,
            'service_name' => 'SurveyStatus',
        ],
        'DbAPI\\V1\\Rest\\FileType\\Controller' => [
            'listener' => \DbAPI\V1\Rest\FileType\FileTypeResource::class,
            'route_name' => 'db-api.rest.doctrine.file-type',
            'route_identifier_name' => 'file_type_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'file_type',
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
            'entity_class' => \Db\Entity\FileType::class,
            'collection_class' => \DbAPI\V1\Rest\FileType\FileTypeCollection::class,
            'service_name' => 'FileType',
        ],
        'DbAPI\\V1\\Rest\\File\\Controller' => [
            'listener' => \DbAPI\V1\Rest\File\FileResource::class,
            'route_name' => 'db-api.rest.doctrine.file',
            'route_identifier_name' => 'file_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'file',
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
            'entity_class' => \Db\Entity\File::class,
            'collection_class' => \DbAPI\V1\Rest\File\FileCollection::class,
            'service_name' => 'File',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'DbAPI\\V1\\Rest\\Question\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Token\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Survey\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Element\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Answer\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Role\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\User\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Theme\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\SubTheme\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Customer\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Team\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\SurveyThemeAssociation\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\TargetAudience\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\Formulation\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\SurveyThemeElement\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\SurveySetting\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\SurveySettingValue\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\SurveySettingType\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\SurveyStatus\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\FileType\\Controller' => 'HalJson',
            'DbAPI\\V1\\Rest\\File\\Controller' => 'HalJson',
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
            'DbAPI\\V1\\Rest\\Formulation\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\SurveyThemeElement\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\SurveySetting\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\SurveySettingValue\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\SurveySettingType\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\SurveyStatus\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\FileType\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\File\\Controller' => [
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
            'DbAPI\\V1\\Rest\\Role\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\User\\Controller' => [
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
            'DbAPI\\V1\\Rest\\Formulation\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\SurveyThemeElement\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\SurveySetting\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\SurveySettingValue\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\SurveySettingType\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\SurveyStatus\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\FileType\\Controller' => [
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ],
            'DbAPI\\V1\\Rest\\File\\Controller' => [
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
            \Db\Entity\Formulation::class => [
                'route_identifier_name' => 'formulation_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.formulation',
                'hydrator' => 'DbAPI\\V1\\Rest\\Formulation\\FormulationHydrator',
            ],
            \DbAPI\V1\Rest\Formulation\FormulationCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.formulation',
                'is_collection' => true,
            ],
            \Db\Entity\SurveyThemeElement::class => [
                'route_identifier_name' => 'survey_theme_element_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.survey-theme-element',
                'hydrator' => 'DbAPI\\V1\\Rest\\SurveyThemeElement\\SurveyThemeElementHydrator',
            ],
            \DbAPI\V1\Rest\SurveyThemeElement\SurveyThemeElementCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.survey-theme-element',
                'is_collection' => true,
            ],
            \Db\Entity\SurveySetting::class => [
                'route_identifier_name' => 'survey_setting_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.survey-setting',
                'hydrator' => 'DbAPI\\V1\\Rest\\SurveySetting\\SurveySettingHydrator',
            ],
            \DbAPI\V1\Rest\SurveySetting\SurveySettingCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.survey-setting',
                'is_collection' => true,
            ],
            \Db\Entity\SurveySettingValue::class => [
                'route_identifier_name' => 'survey_setting_value_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.survey-setting-value',
                'hydrator' => 'DbAPI\\V1\\Rest\\SurveySettingValue\\SurveySettingValueHydrator',
            ],
            \DbAPI\V1\Rest\SurveySettingValue\SurveySettingValueCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.survey-setting-value',
                'is_collection' => true,
            ],
            \Db\Entity\SurveySettingType::class => [
                'route_identifier_name' => 'survey_setting_type_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.survey-setting-type',
                'hydrator' => 'DbAPI\\V1\\Rest\\SurveySettingType\\SurveySettingTypeHydrator',
            ],
            \DbAPI\V1\Rest\SurveySettingType\SurveySettingTypeCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.survey-setting-type',
                'is_collection' => true,
            ],
            \Db\Entity\SurveyStatus::class => [
                'route_identifier_name' => 'survey_status_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.survey-status',
                'hydrator' => 'DbAPI\\V1\\Rest\\SurveyStatus\\SurveyStatusHydrator',
            ],
            \DbAPI\V1\Rest\SurveyStatus\SurveyStatusCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.survey-status',
                'is_collection' => true,
            ],
            \Db\Entity\FileType::class => [
                'route_identifier_name' => 'file_type_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.file-type',
                'hydrator' => 'DbAPI\\V1\\Rest\\FileType\\FileTypeHydrator',
            ],
            \DbAPI\V1\Rest\FileType\FileTypeCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.file-type',
                'is_collection' => true,
            ],
            \Db\Entity\File::class => [
                'route_identifier_name' => 'file_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.file',
                'hydrator' => 'DbAPI\\V1\\Rest\\File\\FileHydrator',
            ],
            \DbAPI\V1\Rest\File\FileCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.file',
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
            \DbAPI\V1\Rest\Role\RoleResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\Role\\RoleHydrator',
            ],
            \DbAPI\V1\Rest\User\UserResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\User\\UserHydrator',
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
            \DbAPI\V1\Rest\Formulation\FormulationResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\Formulation\\FormulationHydrator',
            ],
            \DbAPI\V1\Rest\SurveyThemeElement\SurveyThemeElementResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\SurveyThemeElement\\SurveyThemeElementHydrator',
            ],
            \DbAPI\V1\Rest\SurveySetting\SurveySettingResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\SurveySetting\\SurveySettingHydrator',
            ],
            \DbAPI\V1\Rest\SurveySettingValue\SurveySettingValueResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\SurveySettingValue\\SurveySettingValueHydrator',
            ],
            \DbAPI\V1\Rest\SurveySettingType\SurveySettingTypeResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\SurveySettingType\\SurveySettingTypeHydrator',
            ],
            \DbAPI\V1\Rest\SurveyStatus\SurveyStatusResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\SurveyStatus\\SurveyStatusHydrator',
            ],
            \DbAPI\V1\Rest\FileType\FileTypeResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\FileType\\FileTypeHydrator',
            ],
            \DbAPI\V1\Rest\File\FileResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbAPI\\V1\\Rest\\File\\FileHydrator',
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
                'survey_theme_associations' => 'dbapi.v1.extract.survey.survey_theme_associations',
                'targetaudiences' => 'dbapi.v1.extract.survey.targetaudiences',
                'teams' => 'dbapi.v1.extract.survey.teams',
                'settings' => 'dbapi.v1.extract.survey.settings',
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
        'DbAPI\\V1\\Rest\\Formulation\\FormulationHydrator' => [
            'entity_class' => \Db\Entity\Formulation::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [
                'targetaudiences' => 'dbapi.v1.extract.formulation.targetaudiences',
            ],
            'use_generated_hydrator' => true,
        ],
        'DbAPI\\V1\\Rest\\SurveyThemeElement\\SurveyThemeElementHydrator' => [
            'entity_class' => \Db\Entity\SurveyThemeElement::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'DbAPI\\V1\\Rest\\SurveySetting\\SurveySettingHydrator' => [
            'entity_class' => \Db\Entity\SurveySetting::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'DbAPI\\V1\\Rest\\SurveySettingValue\\SurveySettingValueHydrator' => [
            'entity_class' => \Db\Entity\SurveySettingValue::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'DbAPI\\V1\\Rest\\SurveySettingType\\SurveySettingTypeHydrator' => [
            'entity_class' => \Db\Entity\SurveySettingType::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'DbAPI\\V1\\Rest\\SurveyStatus\\SurveyStatusHydrator' => [
            'entity_class' => \Db\Entity\SurveyStatus::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'DbAPI\\V1\\Rest\\FileType\\FileTypeHydrator' => [
            'entity_class' => \Db\Entity\FileType::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'DbAPI\\V1\\Rest\\File\\FileHydrator' => [
            'entity_class' => \Db\Entity\File::class,
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
        'DbAPI\\V1\\Rest\\Role\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\Role\\Validator',
        ],
        'DbAPI\\V1\\Rest\\User\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\User\\Validator',
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
        'DbAPI\\V1\\Rest\\Formulation\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\Formulation\\Validator',
        ],
        'DbAPI\\V1\\Rest\\SurveyThemeElement\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\SurveyThemeElement\\Validator',
        ],
        'DbAPI\\V1\\Rest\\SurveySetting\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\SurveySetting\\Validator',
        ],
        'DbAPI\\V1\\Rest\\SurveySettingValue\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\SurveySettingValue\\Validator',
        ],
        'DbAPI\\V1\\Rest\\SurveySettingType\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\SurveySettingType\\Validator',
        ],
        'DbAPI\\V1\\Rest\\SurveyStatus\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\SurveyStatus\\Validator',
        ],
        'DbAPI\\V1\\Rest\\FileType\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\FileType\\Validator',
        ],
        'DbAPI\\V1\\Rest\\File\\Controller' => [
            'input_filter' => 'DbAPI\\V1\\Rest\\File\\Validator',
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
                'field_type' => 'string',
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
                'field_type' => 'string',
            ],
            2 => [
                'required' => false,
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [],
                    ],
                ],
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                        'options' => [],
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                        'options' => [],
                    ],
                ],
                'name' => 'targetaudienceQuestion',
                'field_type' => 'string',
            ],
            3 => [
                'required' => false,
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [],
                    ],
                ],
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                        'options' => [],
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                        'options' => [],
                    ],
                ],
                'name' => 'teamQuestion',
                'allow_empty' => true,
                'field_type' => 'string',
            ],
            4 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'welcomeText',
                'allow_empty' => true,
                'field_type' => 'string',
            ],
            5 => [
                'required' => false,
                'validators' => [],
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\Boolean::class,
                        'options' => [
                            'casting' => true,
                            'type' => 'null',
                        ],
                    ],
                ],
                'name' => 'showProgress',
                'field_type' => 'boolean',
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
        'DbAPI\\V1\\Rest\\Formulation\\Validator' => [
            0 => [
                'name' => 'formulation',
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
                            'max' => 1000,
                        ],
                    ],
                ],
            ],
        ],
        'DbAPI\\V1\\Rest\\SurveyThemeElement\\Validator' => [
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
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\Boolean::class,
                        'options' => [
                            'casting' => true,
                            'type' => 'null',
                        ],
                    ],
                ],
                'validators' => [],
            ],
        ],
        'DbAPI\\V1\\Rest\\SurveySetting\\Validator' => [
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
                'validators' => [],
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
                            'max' => 8,
                        ],
                    ],
                ],
            ],
            2 => [
                'required' => true,
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => '1',
                            'max' => '255',
                        ],
                    ],
                ],
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                        'options' => [],
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                        'options' => [],
                    ],
                ],
                'name' => 'description',
                'field_type' => 'string',
            ],
        ],
        'DbAPI\\V1\\Rest\\SurveySettingValue\\Validator' => [
            0 => [
                'name' => 'value',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [],
            ],
        ],
        'DbAPI\\V1\\Rest\\SurveySettingType\\Validator' => [],
        'DbAPI\\V1\\Rest\\SurveyStatus\\Validator' => [
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
                'name' => 'actionName',
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
        'DbAPI\\V1\\Rest\\FileType\\Validator' => [
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
        'DbAPI\\V1\\Rest\\File\\Validator' => [
            0 => [
                'name' => 'fileName',
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
            1 => [
                'name' => 'contents',
                'required' => true,
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
            'DbAPI\\V1\\Rest\\Formulation\\Controller' => [
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
            'dbapi.v1.extract.pageElements' => 'DbAPI\\V1\\Rest\\Page\\PageStrategy',
            'dbapi.v1.extract.survey.pages' => \DbAPI\V1\Rest\Survey\PagesStrategy::class,
            'dbapi.v1.extract.survey.targetaudiences' => \DbAPI\V1\Rest\Survey\TargetaudiencesStrategy::class,
            'dbapi.v1.extract.survey.teams' => \DbAPI\V1\Rest\Survey\TeamsStrategy::class,
            'dbapi.v1.extract.survey.survey_theme_associations' => \DbAPI\V1\Rest\Survey\SurveyThemeStrategy::class,
            'dbapi.v1.extract.survey.settings' => \DbAPI\V1\Rest\Survey\SettingsStrategy::class,
            'dbapi.v1.extract.formulation.targetaudiences' => \DbAPI\V1\Rest\Formulation\TargetaudiencesStrategy::class,
        ],
    ],
    'controllers' => [
        'factories' => [],
    ],
    'zf-rpc' => [],
];
