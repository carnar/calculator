<?php

use Calculator\Operations\Add;

class AddTest extends PHPUnit_Framework_TestCase 
{
    /**
     * @test
     */
    public function it_adds_two_numbers()
    {
        $add = new Add;
        $total = 0;
        $num = 1;
        $expected = 1;

        $result = $add->execute($total, $num);

        $this->assertEquals($expected, $result);
    }

    /**
     * @test
     */
    public function it_adds_two_to_four()
    {
        $add = new Add;
        $total = 4;
        $num = 2;
        $expected = 6;

        $result = $add->execute($total, $num);

        $this->assertEquals($expected, $result);
    }

    /**
     * @test
     */
    public function it_adds_two_to_zero()
    {
        $add = new Add;
        $total = 0;
        $num = 2;
        $expected = 2;

        $result = $add->execute($total, $num);

        $this->assertEquals($expected, $result);        
    }
}