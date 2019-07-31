<?php

namespace App\Services\Calculator\Operations;

use App\Services\Calculator\Contracts\IOperation;

class Division implements IOperation
{
    /**
     * @param array $values
     * @return mixed
     * @throws \Exception
     */
    public function calculate(array $values)
    {
        if (empty($values['secondValue'])) {
            throw new \Exception('Can\'t divide by zero');
        }

        return $values['firstValue'] / $values['secondValue'];
    }
}