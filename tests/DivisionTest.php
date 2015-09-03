<?php 

use Calculator\Operations\Division;

class DivisionTest extends PHPUnit_Framework_TestCase 
{
    /**
     * @test
     */
    public function it_divide_4_by_2()
    {
        $division = new Division;
        $total = 4;
        $num = 2;
        $expected = 2;

        $result = $division->execute($total, $num);

        $this->assertEquals($expected, $result);
    }

    /**
     * @test
     * @expectedException Exception
     */
    public function it_throws_an_exception_for_division_by_zero()
    {
        $division = new Division;
        $total = 4;
        $num = 0;

        $result = $division->execute($total, $num);
    }

    /**
     * @test
     */
    public function it_divides_five_by_one()
    {
        $division = new Division;
        $total = 4;
        $num = 1;
        $expected = 4;

        $result = $division->execute($total, $num);

        $this->assertEquals($expected, $result);        
    }

    /**
     * @test
     */
    public function it_divides_zero_by_two()
    {
        $division = new Division;
        $total = 0;
        $num = 2;
        $expected = 0;

        $result = $division->execute($total, $num);

        $this->assertEquals($expected, $result);        
    }

}