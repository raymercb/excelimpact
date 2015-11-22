<?php

namespace excelimpact\tests;

/**
 * @author Raymer Concepcion
 */
class Sample1Test extends \PHPUnit_Framework_TestCase
{
    public function testFibonacciOf19()
    {
        $sample1 = new Sample1();
        $expected = 4181;
        $actual = $sample1->fibonacci(19);
        $this->assertEquals($expected, $actual);
    }
}