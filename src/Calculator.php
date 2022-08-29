<?php

declare(strict_types=1);

namespace App;

class Calculator
{
    public function sum($a, $b) : int
    {
        return $a + $b;
    }

    public function resta($a, $b) : int
    {
        return $a - $b;
    }
}
