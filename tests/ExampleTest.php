<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $this->assertTrue(true);
    }

    public function testAddition()
    {
        $this->assertEquals(2, 1 + 1);
    }
}
