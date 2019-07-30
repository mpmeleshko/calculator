<?php

namespace App\Services\Calculator\Operations;


use App\Services\Calculator\Contracts\IOperation;

class Average implements IOperation
{
    /**
     * @param array $values
     * @return mixed
     */
    public function calculate(array $values)
    {
        return array_sum($values) / count($values);
    }
}