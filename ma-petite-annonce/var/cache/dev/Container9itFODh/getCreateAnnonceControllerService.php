<?php

namespace Container9itFODh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateAnnonceControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CreateAnnonceController' shared autowired service.
     *
     * @return \App\Controller\CreateAnnonceController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CreateAnnonceController.php';

        $container->services['App\\Controller\\CreateAnnonceController'] = $instance = new \App\Controller\CreateAnnonceController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\CreateAnnonceController', $container));

        return $instance;
    }
}
