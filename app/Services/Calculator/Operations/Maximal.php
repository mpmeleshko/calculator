<?php

namespace App\Services\Calculator\Operations;


use App\Services\Calculator\Contracts\IOperation;

class Maximal implements IOperation
{
    /**
     * @param array $values
     * @return mixed
     */
    public function calculate(array $values)
    {
        return max($values);
    }
}