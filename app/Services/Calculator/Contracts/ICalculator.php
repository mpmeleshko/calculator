<?php

namespace App\Services\Calculator\Contracts;


interface ICalculator
{
    /**
     * @param $data
     * @return mixed
     */
    public function process($data);
}