<?php

namespace Sun\IconDirective;

use Blade;
use Sun\IconDirective\Icon;
use Illuminate\Support\ServiceProvider;

class IconDirectiveServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('icon', function ($expression) {
            return app(Icon::class)->getHtmlMarkUp($expression);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
