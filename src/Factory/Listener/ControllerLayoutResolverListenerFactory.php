<?php
namespace GdproBase\Factory\Listener;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ControllerLayoutResolverListenerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $services)
    {
        $config = $services->get('config');
        $controllerLayoutResolverConfig = [];

        if(isset($config['controller_layout_resolver'])) {
            $controllerLayoutResolverConfig = $config['controller_layout_resolver'];
        }

        return new \GdproBase\Listener\ControllerLayoutResolverListener(
            $controllerLayoutResolverConfig
        );
    }
}
