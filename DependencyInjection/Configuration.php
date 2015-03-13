<?php

namespace EXSyst\Bundle\SecurityBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
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
        $rootNode = $treeBuilder->root('exsyst_security');

        $this->addTOTPSection($rootNode);

        return $treeBuilder;
    }


    private function addTOTPSection(ArrayNodeDefinition $rootNode)
    {
        $rootNode
        ->children()
            ->arrayNode('totp')
                ->canBeDisabled()
                ->children()
                    ->integerNode('stamp_length')
                        ->defaultValue(30)
                        ->validate()
                            ->ifTrue(function ($v) {
                                return empty($v) or $v < 0;
                            })
                            ->thenInvalid('The stamp length must be greater than 0 and positive')
                        ->end()
                    ->end()
                    ->integerNode('validation_window')->defaultValue(1)->end()
                ->end()
        ->end();
    }
}
