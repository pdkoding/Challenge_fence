<?php

use PHPUnit\Framework\TestCase;

require('../challenge.php');

class StackTest extends TestCase
{
    function testRailing()
    {
        $expected = True;
        $test = True;
        $case = Railing($test);
        $this->assertFalse($case, $expected );
    }

    function testPosts()
    {
        $expected = "int";
        $test = "test";
        $case = Posts($test);
        $this->assertContent($case, $expected);
    }

    function testLength()
    {
        $expected = "int";
        $test = 3;
        $case = Length($test);
        $this->assertInternalType($case, $expected);
    }
}
//Fail Test