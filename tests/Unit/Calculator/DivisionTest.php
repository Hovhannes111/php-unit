<?php declare(strict_types=1);

// namespace Tests\Unit;

use \PHPUnit\Framework\TestCase;

class DivisionTest extends TestCase
{
    /** @test */
    public function divides_given_operands()
    {
        $division = new \Src\Calculator\Division;
        $division->setOperands([5, 10]);
        

        $this->assertEquals(15, $division->calculate());
    }

    /** @test */
    public function no_operands_given_throws_exception_when_calculating()
    {
        $this->expectException(\Src\Calculator\Exceptions\NoOperandsException::class);
        $addition = new \Src\Calculator\Division;

        $addition->setOperands();
    }

    /** @test */
    public function remove_division_by_zero_operands()
    {

        $division = new \Src\Calculator\Division;
        $division->setOperands([5, 0, 0, 10, 0]);

        $this->assertEquals(2, $division->calculate());

    }
}