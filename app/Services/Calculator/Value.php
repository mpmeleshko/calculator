<?php

namespace App\Services\Calculator;

use App\Services\Calculator\Contracts\IValue;

class Value implements IValue
{
    /**
     * @var array
     */
    protected $values = [];

    /**
     * @param array $values
     * @return mixed|void
     */
    public function setValues(array $values)
    {
        $this->values = [
            'firstValue' => $values['firstValue'],
            'secondValue' => $values['secondValue']
        ];
    }

    /**
     * @return mixed
     */
    public function getValues()
    {
        return $this->values;
    }
}