<?php declare(strict_types=1);

// namespace Tests\Unit;

use \PHPUnit\Framework\TestCase;

class AdditionTest extends TestCase
{
    // private $addition;

    // protected function setUp(): void
    // {
    //     $this->addition = new \App\Calculator\Addition();
    // }

    /** @test */
    public function adds_up_given_operands()
    {
        $addition = new \Src\Calculator\Addition;
        $addition->setOperands([5, 10]);
        

        $this->assertEquals(15, $addition->calculate());
    }

    /** @test */
    public function no_operands_given_throws_exception_when_calculating()
    {
        $this->expectException(\Src\Calculator\Exceptions\NoOperandsException::class);
        $addition = new \Src\Calculator\Addition;

        $addition->setOperands();
    }
}