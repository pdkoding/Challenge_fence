<?php

use PHPUnit\Framework\TestCase;

require('../challenge.php');

class StackTest extends TestCase
{
    function testRailing()
    {
        $expected = "string";
        $test = 3;
        $case = Railing($test);
        $this->assertInternalType($expected, $case);
    }

    function testPosts()
    {
        $expected = "num";
        $test = 2;
        $case = Posts($test);
        $this->assertNotSame($case, $expected);
    }

    function testLength()
    {
        $expected = "We must have 2 Railings and 3 Posts";
        $test = 3;
        $case = Length($test);
        $this->assertSame($case, $expected);
    }
}
//Success Test