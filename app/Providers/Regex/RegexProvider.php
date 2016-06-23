<?php

namespace App\Providers\Regex;

use Illuminate\Support\ServiceProvider;

use App;

class RegexProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Using to bind a class to facade, create a relationship with facade
        App::bind('regexClass', function(){
            return new App\Providers\Regex\Regex;
        });
    }
}
