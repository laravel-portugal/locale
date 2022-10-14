<?php

namespace LaravelPortugal\Locale;

use Illuminate\Support\ServiceProvider;

class LocaleServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                LocalePublishCommand::class,
            ]);
        }
    }
}
