<?php

namespace Tequilarapido\JavascriptBlade;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class JavascriptBladeProvider extends ServiceProvider
{
    public function boot()
    {
        Blade::directive('javascript', function ($expression) {
            return "<?php echo resolve('\\Tequilarapido\\JavascriptBlade\\Directive')->render($expression); ?>";
        });
    }
}