<?php

namespace App\Services;

use Exception;

class Calculator
{
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }
    public function subtract(int $a, int $b): int
    {
        return $a - $b;
    }
    public function multiply(int $a, int $b): int
    {
        return $a * $b;
    }
    public function divide(int $a, int $b): float
    {
        if ($b == 0)
        {
            throw new Exception("Division by zero");
        }
        return $a / $b;
    }
}

