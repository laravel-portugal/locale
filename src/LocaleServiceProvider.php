<?php

namespace LaravelPortugal\Locale;

use Illuminate\Support\ServiceProvider;

class LocaleServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->registerPublishing();
        }
    }

    private function registerPublishing()
    {
        $this->publishes([__DIR__.'/../lang/pt' => resource_path('lang/pt')], 'lang-pt');
    }
}
