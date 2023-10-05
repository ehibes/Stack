<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Sylius\TwigEvent\Registry\EventBlocksRegistry;

return static function (ContainerConfigurator $configurator): void {
    $services = $configurator->services();

    $services->set('twig_event.registry.event_blocks', EventBlocksRegistry::class)
        ->args([
            tagged_iterator('twig_event.block'),
        ])
    ;

    $services->set('twig_event.renderer.composite_event_block')
        ->args([
            tagged_iterator('twig_event.event_block_renderer'),
        ])
    ;
};
