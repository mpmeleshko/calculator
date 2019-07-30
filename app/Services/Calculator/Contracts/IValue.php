<?php

namespace App\Services\Calculator\Contracts;


interface IValue
{
    /**
     * @param array $values
     * @return mixed
     */
    public function setValues(array $values);

    /**
     * @return mixed
     */
    public function getValues();
}