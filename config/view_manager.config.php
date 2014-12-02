<?php
return [
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
];


