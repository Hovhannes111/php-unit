<?php

namespace Src\Calculator;

use App\Calculator\Exceptions\NoOperandsException;

class Division extends OperationAbstract implements OperationInterface
{
    
    public function calculate()
    {
        if(count($this->operands) === 0)
        {
            throw new NoOperandsException();
        }

        return array_reduce(array_filter($this->operands), function($a, $b) {
            if($a !== 0 && $b !== 0) {
                return $a / $b;
            }

            return $b;
        }, null);

    }
}