<?php

namespace EXSyst\Bundle\SecurityBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('ex_syst_security');

        $rootNode
        ->children()
            ->arrayNode('totp')
                ->canBeEnabled()
                ->children()
                    ->integerNode('stamp_length')->end()
                    ->integerNode('validation_window')->end()
                ->end()
        ->end();

        return $treeBuilder;
    }
}
