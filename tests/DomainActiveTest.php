<?php

use Jezzdk\Laravel\Validator\DomainActive;
use PHPUnit\Framework\TestCase;

class DomainActiveTest extends TestCase
{
    /** @var Domain */
    private $validator;

    protected function setUp(): void
    {
        $this->validator = new DomainActive();
    }

    public function testPasses()
    {
        $this->assertTrue($this->validator->passes('domain', 'google.com'));
    }

    public function testFails()
    {
        $this->assertFalse($this->validator->passes('domain', 'someverylongdomainnamethatijustmadeup.hopeitfails.com'));
    }
}
