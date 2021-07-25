<?php

class Operations
{
    public function __construct()
    {

    }

    public function sum($n1, $n2)
    {
        if ($n1 == null || $n2 == null || !is_numeric($n1) ||!is_numeric($n2)) throw new InvalidArgumentException("Values are not numeric");

        return $n1 + $n2;
    }

    public function divide($n1, $n2)
    {
        if ($n1 === null || $n2 === null || !is_numeric($n1) ||!is_numeric($n2)) throw new InvalidArgumentException("Values are not numeric");
        if ($n2 == 0) throw new DivisionByZeroError('Can not dividie by zero');
        return $n1 / $n2;
    }
}
