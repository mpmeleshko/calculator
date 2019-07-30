<?php

namespace App\Services\Calculator\Operations;


use App\Services\Calculator\Contracts\IOperation;

class Minimal implements IOperation
{
    /**
     * @param array $values
     * @return mixed
     */
    public function calculate(array $values)
    {
        return min($values);
    }
}