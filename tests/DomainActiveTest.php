<?php

use Jezzdk\Laravel\Validator\DomainActive;

class DomainActiveTest extends \PHPUnit_Framework_TestCase
{
    /** @var Domain */
    private $validator;

    protected function setUp()
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
