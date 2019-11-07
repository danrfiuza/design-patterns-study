<?php
declare(strict_types=1);

namespace App\Decorator;
use App\Decorator\Contracts\Pizza;

class PlainPizza implements Pizza
{
    public function getDescription(): string
    {
        return "Thin Dough";
    }

    public function getCost(): float
    {
        return 4.00;
    }
}