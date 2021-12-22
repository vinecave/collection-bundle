<?php

namespace Vinecave\Bundle\CollectionBundle\DependencyInjection;

use Vinecave\Bundle\CollectionBundle\Container\AbstractExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class VinecaveRegistryExtension extends AbstractExtension
{

    public function load(array $configs, ContainerBuilder $container): void
    {
        $this->loadExtension($container, __DIR__ . '/..');
    }
}
