<?php
namespace GdproBase;

use Zend\Mvc\MvcEvent;

/**
 * Class Module
 * @package GdproBase
 */
class Module
{
    /**
     * @param MvcEvent $e
     */
    public function onBootstrap(MvcEvent $e)
    {
        $events = $e->getApplication()->getEventManager();
        $services = $e->getApplication()->getServiceManager();

        $events->attachAggregate(
            $services->get('gdpro_base.listener.controller_layout_resolver')
        );
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    /**
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return [
            'Zend\Loader\StandardAutoloader' => [
                'namespaces' => [
                    __NAMESPACE__ => __DIR__ . '/src/',
                ]
            ]
        ];
    }
}
