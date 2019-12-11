<?php

use Jezzdk\Laravel\Validator\Domain;

class DomainTest extends \PHPUnit_Framework_TestCase
{
    /** @var Domain */
    private $validator;

    protected function setUp()
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
