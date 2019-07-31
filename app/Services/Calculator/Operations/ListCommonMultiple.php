<?php

namespace App\Services\Calculator\Operations;


use App\Services\Calculator\Contracts\IOperation;

class ListCommonMultiple implements IOperation
{

    /**
     * @param array $values
     * @return mixed
     * @throws \Exception
     */
    public function calculate(array $values)
    {
        if (count(array_filter($values)) != count($values)) {
            throw new \Exception('Can\'t find list common multiple for zero');
        }

        return $this->nok($values['firstValue'], $values['secondValue']);
    }

    /**
     * @param $a
     * @param $b
     * @return float|int
     */
    private function nok($a, $b)
    {
        return abs($a * $b)/$this->nod($a, $b);
    }

    /**
     * @param $a
     * @param $b
     * @return mixed
     */
    private function nod($a, $b)
    {
        if ($a == 0 || $b == 0)
            return abs(max(abs($a), abs($b)));

        $r = $a % $b;
        return ($r != 0) ?
            $this->nod($b, $r) :
            abs($b);
    }
}