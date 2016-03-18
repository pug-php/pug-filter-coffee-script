<?php

namespace Jade\Filter;

use Jade\Compiler;
use Jade\Nodes\Filter;
use CoffeeScript\Compiler as CoffeeScript;

class CoffeeScript extends AbstractFilter
{
    public function __invoke(Filter $node, Compiler $compiler)
    {
        $coffee = $this->getNodeString($node, $compiler);
        $js = CoffeeScript::compile($coffee, array(
            'bare ' => true
        ));

        return '<script type="text/javascript">' . $js . '</script>';
    }
}
