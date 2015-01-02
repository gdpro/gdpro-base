<?php
namespace GdproBase\Listener;

use Zend\EventManager\AbstractListenerAggregate;
use Zend\EventManager\EventManagerInterface;
use Zend\Mvc\MvcEvent;

class ControllerLayoutResolverListener extends AbstractListenerAggregate
{
    protected $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function attach(EventManagerInterface $events)
    {
        $this->listeners[] = $events->attach(MvcEvent::EVENT_DISPATCH, [$this, 'onDispatch']);
    }

    public function onDispatch(MvcEvent $e)
    {
        $controller      = $e->getTarget();
        $controllerClass = get_class($controller);

        if (isset($this->config[$controllerClass])) {
            $controller->layout($this->config[$controllerClass]);
        }
    }
}
