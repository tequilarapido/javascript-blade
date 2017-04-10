<?php

namespace Tequilarapido\JavascriptBlade;

class Directive
{
    public function render($key, $value)
    {
        $var = PHP_EOL . "window.App = window.App || {}; window.App.{$key} = " . json_encode($value, JSON_HEX_TAG) . ';' . PHP_EOL;

        return PHP_EOL . "<script>{$var}</script>" . PHP_EOL;
    }
}