<?php
namespace App;

class Calculator
{
    public function add(float $a, float $b): float
    {
        return $a + $b;
    }

    public function subtract(float $a, float $b): float
    {
        return $a - $b;
    }

    public function multiply(float $a, float $b): float
    {
        return $a * $b;
    }

    public function divide(float $a, float $b): float
    {
        if ($b == 0) {
            throw new \InvalidArgumentException("Cannot divide by zero");
        }
        return $a / $b;
    }

    public function power(float $base, float $exponent): float
    {
        if ($base < 0 && fmod($exponent, 1) != 0) {
            throw new \InvalidArgumentException("Cannot calculate power of a negative base with a fractional exponent resulting in a real number.");
        }
        return pow($base, $exponent);
    }
}
