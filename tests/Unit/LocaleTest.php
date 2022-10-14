<?php

namespace LaravelPortugal\Locale\Tests\Unit;

use PHPUnit\Framework\TestCase;

class LocaleTest extends TestCase
{
    /** @test */
    public function test_if_language_files_exists()
    {
        $this->assertFileExists(__DIR__.'/../../lang/pt/auth.php');
        $this->assertFileExists(__DIR__.'/../../lang/pt/pagination.php');
        $this->assertFileExists(__DIR__.'/../../lang/pt/passwords.php');
        $this->assertFileExists(__DIR__.'/../../lang/pt/validation.php');
    }
}
