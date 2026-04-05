<?php
use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    private Calculator $calc;

    protected function setUp(): void
    {
        $this->calc = new Calculator();
    }

    public function testAdd(): void
    {
        $this->assertEquals(5, $this->calc->add(2, 3));
        $this->assertEquals(0, $this->calc->add(-1, 1));
    }

    public function testSubtract(): void
    {
        $this->assertEquals(2, $this->calc->subtract(5, 3));
        $this->assertEquals(-5, $this->calc->subtract(0, 5));
    }

    public function testMultiply(): void
    {
        $this->assertEquals(12, $this->calc->multiply(3, 4));
        $this->assertEquals(0, $this->calc->multiply(0, 100));
    }

    public function testDivide(): void
    {
        $this->assertEquals(5, $this->calc->divide(10, 2));
        $this->assertEquals(3.5, $this->calc->divide(7, 2));
    }

    public function testDivideByZero(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->calc->divide(1, 0);
    }

    public function testPower(): void
    {
        $this->assertEquals(8, $this->calc->power(2, 3));
        $this->assertEquals(1, $this->calc->power(5, 0));
        $this->assertEquals(2, $this->calc->power(4, 0.5));
        $this->assertEquals(0.25, $this->calc->power(2, -2));
        $this->assertEquals(0, $this->calc->power(0, 5));
        $this->assertEquals(4, $this->calc->power(-2, 2));
        $this->assertEquals(-8, $this->calc->power(-2, 3));
    }
}
