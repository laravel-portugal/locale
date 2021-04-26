<?php

namespace LaravelPortugal\Locale\Tests\Unit;

use PHPUnit\Framework\TestCase;

class LocaleTest extends TestCase
{
    /** @test */
    public function test_if_language_files_exists()
    {
        $this->assertFileExists(__DIR__.'/../../resources/lang/pt/auth.php');
        $this->assertFileExists(__DIR__.'/../../resources/lang/pt/pagination.php');
        $this->assertFileExists(__DIR__.'/../../resources/lang/pt/passwords.php');
        $this->assertFileExists(__DIR__.'/../../resources/lang/pt/validation.php');
    }
}
