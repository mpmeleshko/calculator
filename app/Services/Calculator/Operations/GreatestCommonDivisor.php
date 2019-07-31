<?php

namespace App\Services\Calculator\Operations;

use App\Services\Calculator\Contracts\IOperation;

class GreatestCommonDivisor implements IOperation
{
    /**
     * @param array $values
     * @return mixed
     * @throws \Exception
     */
    public function calculate(array $values)
    {
        if (count(array_filter($values)) != count($values)) {
            throw new \Exception('Can\'t find greatest common divisor for zero');
        }

        return $this->gcd_array($values);
    }

    /**
     * Found greatest common divisor for array values
     *
     * @param $array
     * @param int $a
     * @return int|mixed
     */
    private function gcd_array($array, $a = 0)
    {
        $b = array_pop($array);
        return ($b === null) ?
            (int)$a :
            $this->gcd_array($array, $this->gcd($a, $b));
    }

    /**
     * Found greatest common divisor for values
     *
     * @param $a
     * @param $b
     * @return float|int
     */
    private function gcd($a, $b)
    {
        if ($a == 0 || $b == 0)
            return abs(max(abs($a), abs($b)));

        $r = $a % $b;
        return ($r != 0) ?
            $this->gcd($b, $r) :
            abs($b);
    }
}