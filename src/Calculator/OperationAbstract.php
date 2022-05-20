<?php

namespace Src\Calculator;

abstract class OperationAbstract
{
    protected $operands;

    public function setOperands(array $operands)
    {
        $this->operand = $operands;
    }
}