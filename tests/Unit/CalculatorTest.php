<?php
namespace Test\Unit;

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    public function testSuma()
    {
        $calculator = new Calculator();

        $this->assertEquals(5, $calculator->sum(3, 2));
    }

    public function testResta(){
        $calculator = new Calculator();

        $this->assertEquals(1, $calculator->resta(3, 2));
    }

    /*
    public function testAssert()
    {
        self::assertTrue(true);

        $this->assertClassHasAttribute('data', Calculator::class);

        $this->assertContains(1, [1,2,3,4]);
    }
     */
}
