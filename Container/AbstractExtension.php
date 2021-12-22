<?php

namespace Vinecave\Bundle\CollectionBundle\Container;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

abstract class AbstractExtension extends Extension
{
    public function loadExtension(ContainerBuilder $container, string $baseDir): void
    {
        $loader = new YamlFileLoader($container, new FileLocator($baseDir . '/../Resources/config'));
        $loader->load('services.yaml');

        $env = $container->getParameter('kernel.environment');
        if (file_exists($baseDir . '/../Resources/config/services_' . $env . '.yaml')) {
            $loader->load('services_' . $env . '.yaml');
        }
    }
}
