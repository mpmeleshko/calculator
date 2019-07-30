<?php

namespace App\Services\Calculator\Operations;


use App\Services\Calculator\Contracts\IOperation;

class Exponentiation implements IOperation
{
    /**
     * @param array $values
     * @return mixed
     */
    public function calculate(array $values)
    {
        return pow($values['firstValue'], $values['secondValue']);
    }
}