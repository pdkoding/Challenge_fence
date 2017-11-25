<?php

use PHPUnit\Framework\TestCase;

require('../function.php');

class StackTest extends TestCase
{
    function testRailing()
    {
       // $expected = "";
        $test = 'hello';
        $case = ScoreCalculator($test);
        $this->AssertType($case, $string);
    }

}

//Success Test
