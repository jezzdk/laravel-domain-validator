<?php

use Jezzdk\Laravel\Validator\Domain;
use PHPUnit\Framework\TestCase;

class DomainTest extends TestCase
{
    /** @var Domain */
    private $validator;

    protected function setUp(): void
    {
        $this->validator = new Domain();
    }

    public function testPasses()
    {
        $this->assertTrue($this->validator->passes('domain', 'google.com'));
    }

    public function testFails()
    {
        $this->assertFalse($this->validator->passes('domain', 'http://google.com'));
    }
}
