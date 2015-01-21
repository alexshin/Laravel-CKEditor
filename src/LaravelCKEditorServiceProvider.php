<?php

namespace Alexshin\LaravelCKEditor;

use Illuminate\Support\ServiceProvider;

class LaravelCKEditorServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;



    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['ckeditor'] = $this->app->share(function ($app) {
                return new Foo;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['command.ckeditor.generate', 'command.ckeditor.models'];
    }
    
    
}

class Foo{}
