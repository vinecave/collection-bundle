<?php

namespace Vinecave\Bundle\CollectionBundle\Container;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

abstract class AbstractExtension extends Extension
{
    public function loadExtension(ContainerBuilder $container, string $bundleDir): void
    {
        $directory = $bundleDir . '/Resources/config';

        $loader = new YamlFileLoader($container, new FileLocator($directory));

        $filename = 'services.yaml';

        if (file_exists($directory . '/' . $filename)) {
            $loader->load($filename);
        }

        $env = $container->getParameter('kernel.environment');

        $filename = 'services_' . $env . '.yaml';

        if (file_exists($directory . '/' . $filename)) {
            $loader->load($filename);
        }
    }
}
