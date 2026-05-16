<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $this->assertEquals(5, $calculator->add(2, 2));
    }

    public function testFlaseAdd() {
        $calculator = new Calculator();
        $this->assertNotEquals(5, $calculator->add(2, 2));
    }

    public function testDivideByZeroThrowsException()
    {
        $calculator = new Calculator();
        
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Division by zero is not allowed");
        
        $calculator->divide(10, 0);
    }
}
