<?php

namespace Ait\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider {
    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'contact');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php'),
        ]);
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/contact.php', 'contact'
        );
    }
}