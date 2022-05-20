<?php declare(strict_types=1);

// namespace Tests\Unit;

use \PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /** @test */
    public function can_set_single_operands()
    {
        $addition = new \Src\Calculator\Addition;
        $addition->setOperands([5, 10]);
        
        $calculator = new \Src\Calculator\Calculator;
        $calculator->setOperation($addition);

        $this->assertCount(1, $calculator->getOperations());
    }

    /** @test */
    public function can_set_multiple_operands()
    {
        $addition1 = new \Src\Calculator\Addition;
        $addition1->setOperands([5, 10]);

        $addition2 = new \Src\Calculator\Addition;
        $addition2->setOperands([2, 2]);
        
        $calculator = new \Src\Calculator\Calculator;
        $calculator->setOperation($addition1, $addition2);

        $this->assertCount(2, $calculator->getOperations());
    }

    /** @test */
    public function operations_are_ignored_if_not_instance_of_operatino_interface()
    {
        $addition = new \Src\Calculator\Addition;
        $addition->setOperands([5, 10]);
     
        $calculator = new \Src\Calculator\Calculator;

        $this->assertCount(1, $calculator->getOperations());

    }

    /** @test */
    public function can_calculate_result()
    {
        $addition = new \Src\Calculator\Addition;
        $addition->setOperands([5, 10]);
     
        $calculator = new \Src\Calculator\Calculator;
        $calculator->setOperation($addition);

        $this->assertCount(15, $calculator->getOperations());

    }

    /** @test */
     public function calculate_method_returns_multiple_resuls()
     {
         $addition = new \Src\Calculator\Addition;
         $addition->setOperands([5, 10]);

        $division = new \Src\Calculator\Division;
        $division->setOperands([50, 2]);
      
         $calculator = new \Src\Calculator\Calculator;
         $calculator->setOperation($addition, $division);
 
         $this->assertInternalType('array', $calculator->calculate());
         $this->assertCount(15, $calculator->calculate()[0]);
         $this->assertCount(25, $calculator->calculate()[1]);
 
     }
}
