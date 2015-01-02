<?php
return [
    'service_manager' => [
        'abstract_factories' => [
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
        ],
        'aliases' => [
            'translator' => 'MvcTranslator',
        ],
        'invokables' => [
            'view_model' => 'Zend\View\Model\ViewModel',
        ],
        'factories' => [
            'gdpro_base.listener.controller_layout_resolver' => 'GdproBase\Factory\Listener\ControllerLayoutResolverListenerFactory',
        ]
    ],

    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => [
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            'gdpro_base' => __DIR__ . '/../view',
        ]
    ]
];
