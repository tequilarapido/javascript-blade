<?php

namespace Tequilarapido\JavascriptBlade;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class JavascriptBladeProvider extends ServiceProvider
{
    public function boot()
    {
        // Config
        $this->publishes([
            __DIR__ . '/../config/config.php' => config_path('javascript_blade.php'),
        ], 'config');

        // Directive
        Blade::directive('javascript', function ($expression) {
            return "<?php echo resolve('\\Tequilarapido\\JavascriptBlade\\Directive')->render($expression); ?>";
        });
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'javascript_blade');
    }
}