<?php

namespace Jade\Filter;

use Jade\Compiler;
use Jade\Nodes\Filter;
use CoffeeScript\Compiler as CoffeeScript;

class CoffeeScript extends AbstractFilter
{
    public function __invoke(Filter $node, Compiler $compiler)
    {
        $nodes = $node->block->nodes;
        $indent = strlen($nodes[0]->value) - strlen(ltrim($nodes[0]->value));
        $coffee = '';
        foreach ($nodes as $line) {
            $coffee .= substr($line->value, $indent) . "\n";
        }
        $js = CoffeeScript::compile($coffee, array(
            'filename' => 'source.coffee',
            'bare' => true,
            'header' => false,
        ));

        return '<script type="text/javascript">' . $js . '</script>';
    }
}
