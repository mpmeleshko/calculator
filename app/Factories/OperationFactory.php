<?php

namespace App\Factories;


use App\Services\Calculator\Operation;
use App\Services\Calculator\Operations\Addition;
use App\Services\Calculator\Operations\Average;
use App\Services\Calculator\Operations\Division;
use App\Services\Calculator\Operations\Exponentiation;
use App\Services\Calculator\Operations\GreatestCommonDivisor;
use App\Services\Calculator\Operations\ListCommonMultiple;
use App\Services\Calculator\Operations\Maximal;
use App\Services\Calculator\Operations\Minimal;
use App\Services\Calculator\Operations\Multiplication;
use App\Services\Calculator\Operations\Subtraction;

class OperationFactory
{
    /**
     * Create operation based given type.
     *
     * @param $type
     * @return mixed
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public static function createOperationMethod($type)
    {
        switch ($type) {
            case Operation::ADDITION:
                $operation = app()->make(Addition::class);
                break;
            case Operation::AVERAGE:
                $operation = app()->make(Average::class);
                break;
            case Operation::DIVISION:
                $operation = app()->make(Division::class);
                break;
            case Operation::EXPONENTIATION:
                $operation = app()->make(Exponentiation::class);
                break;
            case Operation::MAXIMAL:
                $operation = app()->make(Maximal::class);
                break;
            case Operation::MINIMAL:
                $operation = app()->make(Minimal::class);
                break;
            case Operation::MULTIPLICATION:
                $operation = app()->make(Multiplication::class);
                break;
            case Operation::SUBTRACTION:
                $operation = app()->make(Subtraction::class);
                break;
            case Operation::GREATEST_COMMON_DIVISOR:
                $operation = app()->make(GreatestCommonDivisor::class);
                break;
            case Operation::LIST_COMMON_MULTIPLE:
                $operation = app()->make(ListCommonMultiple::class);
                break;
            default:
                $operation = null;
                break;
        }
        return $operation;
    }
}