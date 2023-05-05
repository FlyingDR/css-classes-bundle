<?php

declare(strict_types=1);

namespace Flying\Bundle\Css\ClassesBundle\DependencyInjection;

use Flying\Util\Css\Twig\ClassesExtension as TwigClassesExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Extension\Extension;

class ClassesExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        $definition = (new Definition(TwigClassesExtension::class))
            ->addTag('twig.extension');
        $container->setDefinition(TwigClassesExtension::class, $definition);
    }
}
