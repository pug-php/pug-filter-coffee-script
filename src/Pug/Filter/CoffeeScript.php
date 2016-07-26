<?php

namespace Pug\Filter;

use NodejsPhpFallback\CoffeeScript as CoffeeScriptPhpEngine;

class CoffeeScript extends Script
{
    protected $textType = 'javascript';

    public function parse($code)
    {
        return new CoffeeScriptPhpEngine($code);
    }
}
