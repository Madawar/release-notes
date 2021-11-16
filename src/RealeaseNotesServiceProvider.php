<?php

namespace Codedcell\RealeaseNotes;

use Codedcell\RealeaseNotes\Http\Livewire\ReleaseNoteCreator;
use Codedcell\RealeaseNotes\View\Components\Readme;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class RealeaseNotesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'realease-notes');
        $this->loadViewComponentsAs('realeasenotes', [
            Readme::class,
        ]);
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'realease-notes');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        Livewire::component('note', ReleaseNoteCreator::class);
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('realease-notes.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/realease-notes'),
            ], 'views');*/

            // Publishing assets.
            //dd(__DIR__ . '/resources/assets');
            $this->publishes([
                __DIR__ . '/resources/assets' => public_path('realease-notes'),
            ], 'assets');

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/realease-notes'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);

        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'realease-notes');

        // Register the main class to use with the facade
        $this->app->singleton('realease-notes', function () {
            return new RealeaseNotes;
        });
    }
}
