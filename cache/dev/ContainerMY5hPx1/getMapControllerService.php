<?php

namespace ContainerMY5hPx1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMapControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\MapController' shared autowired service.
     *
     * @return \App\Controller\MapController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/MapController.php';

        $container->services['App\\Controller\\MapController'] = $instance = new \App\Controller\MapController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\MapController', $container));

        return $instance;
    }
}
