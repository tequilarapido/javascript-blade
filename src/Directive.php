<?php

namespace Tequilarapido\JavascriptBlade;

class Directive
{
    public function render($key, $value)
    {
        $namespace = config('javascript_blade.namespace', 'window.App');

        $var = PHP_EOL . "{$namespace} = {$namespace} || {}; {$namespace}.{$key} = " . json_encode($value, JSON_HEX_TAG) . ';' . PHP_EOL;

        return PHP_EOL . "<script>{$var}</script>" . PHP_EOL;
    }
}