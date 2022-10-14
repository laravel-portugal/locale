<?php

use Illuminate\Support\Facades\File;

it('checks if the language files exist', function () {
    $targetLangPath = $this->app->basePath('lang/pt');

    File::deleteDirectory($targetLangPath);

    $this->artisan('laravel-portugal:locale-publish')->assertExitCode(0);

    $this->assertFileExists($targetLangPath.'/auth.php');
    $this->assertFileExists($targetLangPath.'/pagination.php');
    $this->assertFileExists($targetLangPath.'/passwords.php');
    $this->assertFileExists($targetLangPath.'/validation.php');
});
