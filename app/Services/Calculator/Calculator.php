<?php

namespace App\Services\Calculator;

use App\Factories\OperationFactory;
use App\Services\Calculator\Contracts\ICalculator;
use App\Services\Calculator\Contracts\IValue;

class Calculator implements ICalculator
{
    /**
     * @var IValue
     */
    private $IValue;

    /**
     * Calculator constructor.
     * @param IValue $IValue
     */
    public function __construct(IValue $IValue)
    {
        $this->IValue = $IValue;
    }

    /**
     * Calculate values based on operation
     *
     * @param $data
     * @return mixed
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function process($data)
    {
        $this->IValue->setValues($data);

        $operation = OperationFactory::createOperationMethod($data['operation']);

        if(empty($operation)) {
            throw new \Exception('Operation not found.');
        }

        $result = $operation->calculate($this->IValue->getValues());

        return $result;
    }
}