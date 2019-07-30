<?php

namespace App\Services\Calculator\Operations;

use App\Services\Calculator\Contracts\IOperation;

class Subtraction implements IOperation
{
    /**
     * @param array $values
     * @return mixed
     */
    public function calculate(array $values)
    {
        return $values['firstValue'] - $values['secondValue'];
    }
}