<?php

it('checks if the language files exist', function () {
    $this->assertFileExists(__DIR__.'/../../lang/pt/auth.php');
    $this->assertFileExists(__DIR__.'/../../lang/pt/pagination.php');
    $this->assertFileExists(__DIR__.'/../../lang/pt/passwords.php');
    $this->assertFileExists(__DIR__.'/../../lang/pt/validation.php');
});
