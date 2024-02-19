<?php

namespace Tests\Unit;

use App\Calculator;
use PHPUnit\Framework\TestCase;

class AnotherExampleTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
        $this->assertFalse(1 == '10');
    }

    public function testContains()
    {
        $this->assertContains(4, [1, 2, 3, 4, 5, 6, 7]);
    }

    public function testCount()
    {
        $this->assertCount(2, [34, 34]);
    }

    public function testEmpty()
    {
        $this->assertEmpty([]);
        $this->assertNotEmpty([1]);
    }

    public function testEquals()
    {
        $this->assertEquals(1, 1);
        $this->assertEquals('bar', 'bar');
        $this->assertEquals(['bar'], ['bar']);
    }

    public function testGreaterThan()
    {
        $this->assertGreaterThan(1, 2);
    }

    public function testLessThan()
    {
        $this->assertLessThan(2, 1);
    }

    public function testAdd()
    {
        $calc = new Calculator();
        $this->assertEquals(2, $calc->add(1, 1));
    }
}
