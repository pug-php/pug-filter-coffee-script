<?php

namespace Pug\Filter;

use NodejsPhpFallback\CoffeeScript as CoffeeScriptPhpEngine;

class Coffeescript extends Script
{
    protected $textType = 'javascript';

    public function parse($code)
    {
        return new CoffeeScriptPhpEngine($code);
    }
}
