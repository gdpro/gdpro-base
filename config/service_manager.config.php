<?php
return [
    'abstract_factories' => [
        'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
    ],
    'aliases' => [
        'translator' => 'MvcTranslator',
    ],
    'invokables' => [
        'view_model' => 'Zend\View\Model\ViewModel'
    ],
];
