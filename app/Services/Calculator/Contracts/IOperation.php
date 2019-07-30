<?php

namespace App\Services\Calculator\Contracts;


interface IOperation
{
    /**
     * @param array $values
     * @return mixed
     */
    public function calculate(array $values);
}