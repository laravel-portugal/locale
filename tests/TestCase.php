<?php

namespace LaravelPortugal\Locale\Tests;

use LaravelPortugal\Locale\LocaleServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            LocaleServiceProvider::class,
        ];
    }
}
